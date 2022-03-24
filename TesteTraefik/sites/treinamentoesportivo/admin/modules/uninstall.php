<?php

// $Id: uninstall.php 942 2009-02-21 07:54:48Z doc $

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

// Setup admin object
require('../../config.php');
require_once(WB_PATH.'/framework/class.admin.php');
$admin = new admin('Addons', 'modules_uninstall');

// Check if user selected module
if(!isset($_POST['file']) OR $_POST['file'] == "") {
	header("Location: index.php");
	exit(0);
} else {
	$file = $admin->add_slashes($_POST['file']);
}

// Extra protection
if(trim($file) == '') {
	header("Location: index.php");
	exit(0);
}

// Include the WB functions file
require_once(WB_PATH.'/framework/functions.php');

// Check if the module exists
if(!is_dir(WB_PATH.'/modules/'.$file)) {
	$admin->print_error($MESSAGE['GENERIC']['NOT_INSTALLED']);
}

if (!function_exists("replace_all")) {
	function replace_all ($aStr = "", &$aArray ) {
		foreach($aArray as $k=>$v) $aStr = str_replace("{{".$k."}}", $v, $aStr);
		return $aStr;
	}
}

$info = $database->query("SELECT section_id, page_id FROM ".TABLE_PREFIX."sections WHERE module='".$_POST['file']."'" );

if ( $info->numRows() > 0) {
	
	/**
	*	Modul is in use, so we have to warn the user
	*/
	if (!array_key_exists("CANNOT_UNINSTALL_IN_USE_TMPL", $MESSAGE['GENERIC'])) {
		$add = $info->numRows() == 1 ? "this page" : "these pages";
		$msg_template_str  = "<br /><br />{{type}} <b>{{type_name}}</b> could not be uninstalled because it is still in use on {{pages}}";
		$msg_template_str .= ":<br /><i>click for editing.</i><br /><br />";
	} else {
		$msg_template_str = $MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL'];
		$temp = explode(";",$MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE_TMPL_PAGES']);
		$add = $info->numRows() == 1 ? $temp[0] : $temp[1];
	}
	/**
	*	The template-string for displaying the Page-Titles ... in this case as a link
	*/
	$page_template_str = "- <b><a href='../pages/sections.php?page_id={{id}}'>{{title}}</a></b><br />";
	
	$values = array ('type' => 'Modul', 'type_name' => $file, 'pages' => $add );
	$msg = replace_all ( $msg_template_str,  $values );
		
	$page_names = "";
	
	while ($data = $info->fetchRow() ) {
	
		$temp = $database->query("SELECT page_title from ".TABLE_PREFIX."pages where page_id=".$data['page_id']);
		$temp_title = $temp->fetchRow();
		
		$page_info = array(
			'id'	=> $data['page_id'], 
			'title' => $temp_title['page_title']
		);
			
		$page_names .= replace_all ( $page_template_str, $page_info );
	}
	
	/**
	*	Printing out the error-message and die().
	*/
	$admin->print_error(str_replace ($TEXT['FILE'], "Modul", $MESSAGE['GENERIC']['CANNOT_UNINSTALL_IN_USE']).$msg.$page_names);
}

// Check if we have permissions on the directory
if(!is_writable(WB_PATH.'/modules/'.$file)) {
	$admin->print_error($MESSAGE['GENERIC']['CANNOT_UNINSTALL']);
}

// Run the modules uninstall script if there is one
if(file_exists(WB_PATH.'/modules/'.$file.'/uninstall.php')) {
	require(WB_PATH.'/modules/'.$file.'/uninstall.php');
}

// Try to delete the module dir
if(!rm_full_dir(WB_PATH.'/modules/'.$file)) {
	$admin->print_error($MESSAGE['GENERIC']['CANNOT_UNINSTALL']);
} else {
	// Remove entry from DB
	$database->query("DELETE FROM ".TABLE_PREFIX."addons WHERE directory = '".$file."' AND type = 'module'");
}

// Print success message
$admin->print_success($MESSAGE['GENERIC']['UNINSTALLED']);

// Print admin footer
$admin->print_footer();

?>