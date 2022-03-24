<?php

// $Id: add.php 1071 2009-07-15 22:35:20Z Ruebenwurzel $

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2009, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

// Create new admin object and print admin header
require('../../config.php');
require_once(WB_PATH.'/framework/class.admin.php');
$admin = new admin('Pages', 'pages_add');

// Include the WB functions file
require_once(WB_PATH.'/framework/functions.php');

// Get values
$title = $admin->get_post_escaped('title');
$title = htmlspecialchars($title);
$module = $admin->get_post('type');
$parent = $admin->get_post('parent');
$visibility = $admin->get_post('visibility');
$admin_groups = $admin->get_post('admin_groups');
$viewing_groups = $admin->get_post('viewing_groups');

// add Admin to admin and viewing-groups
$admin_groups[] = 1;
$viewing_groups[] = 1;

if ($parent!=0) {
	if (!$admin->get_page_permission($parent,'admin'))
		$admin->print_error($MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS']);
} elseif (!$admin->get_permission('pages_add_l0','system')) {
	$admin->print_error($MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS']);
}	

// Validate data
if($title == '' || substr($title,0,1)=='.') {
	$admin->print_error($MESSAGE['PAGES']['BLANK_PAGE_TITLE']);
}

// Check to see if page created has needed permissions
if(!in_array(1, $admin->get_groups_id())) {
	$admin_perm_ok = false;
	foreach ($admin_groups as $adm_group) {
		if (in_array($adm_group, $admin->get_groups_id())) {
			$admin_perm_ok = true;
		}
	}
	if ($admin_perm_ok == false) {
		$admin->print_error($MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS']);
	}
	$admin_perm_ok = false;
	foreach ($viewing_groups as $view_group) {
		if (in_array($view_group, $admin->get_groups_id())) {
			$admin_perm_ok = true;
		}
	}
	if ($admin_perm_ok == false) {
		$admin->print_error($MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS']);
	}
}

$admin_groups = implode(',', $admin_groups);
$viewing_groups = implode(',', $viewing_groups);

// Work-out what the link and page filename should be
if($parent == '0') {
	$link = '/'.page_filename($title);
	// rename menu titles: index && intro to prevent clashes with intro page feature and WB core file /pages/index.php
	if($link == '/index' || $link == '/intro') {
		$link .= '_0';
		$filename = WB_PATH .PAGES_DIRECTORY .'/' .page_filename($title) .'_0' .PAGE_EXTENSION;
	} else {
		$filename = WB_PATH.PAGES_DIRECTORY.'/'.page_filename($title).PAGE_EXTENSION;
	}
} else {
	$parent_section = '';
	$parent_titles = array_reverse(get_parent_titles($parent));
	foreach($parent_titles AS $parent_title) {
		$parent_section .= page_filename($parent_title).'/';
	}
	if($parent_section == '/') { $parent_section = ''; }
	$link = '/'.$parent_section.page_filename($title);
	$filename = WB_PATH.PAGES_DIRECTORY.'/'.$parent_section.page_filename($title).PAGE_EXTENSION;
	make_dir(WB_PATH.PAGES_DIRECTORY.'/'.$parent_section);
}

// Check if a page with same page filename exists
$get_same_page = $database->query("SELECT page_id FROM ".TABLE_PREFIX."pages WHERE link = '$link'");
if($get_same_page->numRows() > 0 OR file_exists(WB_PATH.PAGES_DIRECTORY.$link.PAGE_EXTENSION) OR file_exists(WB_PATH.PAGES_DIRECTORY.$link.'/')) {
	$admin->print_error($MESSAGE['PAGES']['PAGE_EXISTS']);
}

// Include the ordering class
require(WB_PATH.'/framework/class.order.php');
$order = new order(TABLE_PREFIX.'pages', 'position', 'page_id', 'parent');
// First clean order
$order->clean($parent);
// Get new order
$position = $order->get_new($parent);

// Work-out if the page parent (if selected) has a seperate template or language to the default
$query_parent = $database->query("SELECT template, language FROM ".TABLE_PREFIX."pages WHERE page_id = '$parent'");
if($query_parent->numRows() > 0) {
	$fetch_parent = $query_parent->fetchRow();
	$template = $fetch_parent['template'];
	$language = $fetch_parent['language'];
} else {
	$template = '';
	$language = DEFAULT_LANGUAGE;
}

// Insert page into pages table
$query = "INSERT INTO ".TABLE_PREFIX."pages (page_title,menu_title,parent,template,target,position,visibility,searching,menu,language,admin_groups,viewing_groups,modified_when,modified_by) VALUES ('$title','$title','$parent','$template','_top','$position','$visibility','1','1','$language','$admin_groups','$viewing_groups','".time()."','".$admin->get_user_id()."')";
$database->query($query);
if($database->is_error()) {
	$admin->print_error($database->get_error());
}

// Get the page id
$page_id = $database->get_one("SELECT LAST_INSERT_ID()");

// Work out level
$level = level_count($page_id);
// Work out root parent
$root_parent = root_parent($page_id);
// Work out page trail
$page_trail = get_page_trail($page_id);

// Update page with new level and link
$database->query("UPDATE ".TABLE_PREFIX."pages SET link = '$link', level = '$level', root_parent = '$root_parent', page_trail = '$page_trail' WHERE page_id = '$page_id'");

// Create a new file in the /pages dir
create_access_file($filename, $page_id, $level);

// add position 1 to new page
$position = 1;

// Add new record into the sections table
$database->query("INSERT INTO ".TABLE_PREFIX."sections (page_id,position,module,block) VALUES ('$page_id','$position', '$module','1')");

// Get the section id
$section_id = $database->get_one("SELECT LAST_INSERT_ID()");

// Include the selected modules add file if it exists
if(file_exists(WB_PATH.'/modules/'.$module.'/add.php')) {
	require(WB_PATH.'/modules/'.$module.'/add.php');
}

// Check if there is a db error, otherwise say successful
if($database->is_error()) {
	$admin->print_error($database->get_error());
} else {
	$admin->print_success($MESSAGE['PAGES']['ADDED'], ADMIN_URL.'/pages/modify.php?page_id='.$page_id);
}

// Print admin footer
$admin->print_footer();

?>