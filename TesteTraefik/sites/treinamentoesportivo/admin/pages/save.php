<?php

// $Id: save.php 1072 2009-07-16 18:50:11Z Ruebenwurzel $

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

// Get page & section id
if(!isset($_POST['page_id']) OR !is_numeric($_POST['page_id'])) {
	header("Location: index.php");
	exit(0);
} else {
	$page_id = $_POST['page_id'];
}
if(!isset($_POST['section_id']) OR !is_numeric($_POST['section_id'])) {
	header("Location: index.php");
	exit(0);
} else {
	$section_id = $_POST['section_id'];
}

// Create new admin object
require('../../config.php');
require_once(WB_PATH.'/framework/class.admin.php');
$admin = new admin('Pages', 'pages_modify');

// Get perms
$database = new database();
$results = $database->query("SELECT admin_groups,admin_users FROM ".TABLE_PREFIX."pages WHERE page_id = '$page_id'");
$results_array = $results->fetchRow();
$old_admin_groups = explode(',', str_replace('_', '', $results_array['admin_groups']));
$old_admin_users = explode(',', str_replace('_', '', $results_array['admin_users']));
$in_old_group = FALSE;
foreach($admin->get_groups_id() as $cur_gid){
    if (in_array($cur_gid, $old_admin_groups)) {
        $in_old_group = TRUE;
    }
}
if((!$in_old_group) AND !is_numeric(array_search($admin->get_user_id(), $old_admin_users))) {
	$admin->print_error($MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS']);
}

// Get page module
$database = new database();
$query = "SELECT module FROM ".TABLE_PREFIX."pages WHERE page_id = '$page_id'";
$results = $database->query($query);
if($database->is_error()) {
	$admin->print_error($database->get_error());
}
if($results->numRows() == 0) {
	$admin->print_error($MESSAGE['PAGES']['NOT_FOUND']);
}
$results_array = $results->fetchRow();
$module = $results_array['module'];

// Update the pages table
$now = time();
$query = "UPDATE ".TABLE_PREFIX."pages SET modified_when = '$now', modified_by = '".$admin->get_user_id()."' WHERE page_id = '$page_id'";
$database->query($query);

// Include the modules saving script if it exists
if(file_exists(WB_PATH.'/modules/'.$module.'/save.php')) {
	require(WB_PATH.'/modules/'.$module.'/save.php');
}

// Check if there is a db error, otherwise say successful
if($database->is_error()) {
	$admin->print_error($database->get_error(), $js_back);
} else {
	$admin->print_success($MESSAGE['PAGES']['SAVED'], ADMIN_URL.'/pages/modify.php?page_id='.$page_id);
}

// Print admin footer
$admin->print_footer();

?>