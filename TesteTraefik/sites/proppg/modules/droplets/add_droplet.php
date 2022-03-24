<?php

// $Id: add_droplet.php 1072 2009-07-16 18:50:11Z Ruebenwurzel $

/*
*	@version	1.0
*	@author		Ruud Eisinga (Ruud) John (PCWacht)
*	@date		June 2009
*
*	droplets are small codeblocks that are called from anywhere in the template. 
* 	To call a droplet just use [[dropletname]]. optional parameters for a droplet can be used like [[dropletname?parameter=value&parameter2=value]]
*/

require('../../config.php');

require_once(WB_PATH.'/framework/class.admin.php');
require_once(WB_PATH.'/framework/functions.php');
$admin = new admin('admintools','admintools',false,false);
if($admin->get_permission('admintools') == true) {
	
	$admintool_link = ADMIN_URL .'/admintools/index.php';
	$module_edit_link = ADMIN_URL .'/admintools/tool.php?tool=droplets';
	$admin = new admin('admintools', 'admintools');

	$modified_when = time();
	$modified_by = $admin->get_user_id();

	// Insert new row into database
	$database->query("INSERT INTO ".TABLE_PREFIX."mod_droplets (active,modified_when,modified_by) VALUES ('1','$modified_when','$modified_by' )");

	// Get the id
	$droplet_id = $database->get_one("SELECT LAST_INSERT_ID()");

	// Say that a new record has been added, then redirect to modify page
	if($database->is_error()) {
		$admin->print_error($database->get_error(), $module_edit_link);
	} else {
		$admin->print_success($TEXT['SUCCESS'], WB_URL.'/modules/droplets/modify_droplet.php?droplet_id='.$droplet_id);
	}

	// Print admin footer
	$admin->print_footer();
} else {
	die(header('Location: ../../index.php'));
} 
?>