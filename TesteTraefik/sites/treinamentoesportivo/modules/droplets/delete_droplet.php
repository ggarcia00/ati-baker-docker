<?php

// $Id: delete_droplet.php 991 2009-06-15 15:55:20Z Ruebenwurzel $

/*
*	@version	1.0
*	@author		Ruud Eisinga (Ruud) John (PCWacht)
*	@date		June 2009
*
*	droplets are small codeblocks that are called from anywhere in the template. 
* 	To call a droplet just use [[dropletname]]. optional parameters for a droplet can be used like [[dropletname?parameter=value&parameter2=value]]
*/

require('../../config.php');

// Get id
if(!isset($_GET['droplet_id']) OR !is_numeric($_GET['droplet_id'])) {
	header("Location: ".ADMIN_URL."/pages/index.php");
} else {
	$droplet_id = $_GET['droplet_id'];
}

// Include WB admin wrapper script
require_once(WB_PATH.'/framework/class.admin.php');
require_once(WB_PATH.'/framework/functions.php');

// check website baker platform (with WB 2.7, Admin-Tools were moved out of settings dialogue)
if(file_exists(ADMIN_PATH .'/admintools/tool.php')) {
	$admintool_link = ADMIN_URL .'/admintools/index.php';
	$module_edit_link = ADMIN_URL .'/admintools/tool.php?tool=droplets';
	$admin = new admin('admintools', 'admintools');
} else {
	$admintool_link = ADMIN_URL .'/settings/index.php?advanced=yes#administration_tools"';
	$module_edit_link = ADMIN_URL .'/settings/tool.php?tool=droplets';
	$admin = new admin('Settings', 'settings_advanced');
}

// Delete droplet
$database->query("DELETE FROM ".TABLE_PREFIX."mod_droplets WHERE id = '$droplet_id' LIMIT 1");

// Check if there is a db error, otherwise say successful
if($database->is_error()) {
	$admin->print_error($database->get_error(), WB_URL.'/modules/droplets/modify_droplet.php?droplet_id='.$droplet_id);
} else {
    $admin->print_success($TEXT['SUCCESS'], $module_edit_link);
}

// Print admin footer
$admin->print_footer();

?>