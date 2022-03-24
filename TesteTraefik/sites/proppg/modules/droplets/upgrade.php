<?php

// $Id: upgrade.php 998 2009-06-17 20:59:09Z ruud $

/*
*	@version	1.0
*	@author		Ruud Eisinga (Ruud) John (PCWacht)
*	@date		June 2009
*
*
*	droplets are small codeblocks that are called from anywhere in the template. 
* 	To call a droplet just use [[dropletname]]. optional parameters for a droplet can be used like [[dropletname?parameter=value&parameter2=value]]
*/

if(!defined('WB_PATH')) die(header('Location: ../../index.php'));

$table = TABLE_PREFIX .'mod_droplets';

$info = $database->query("SELECT * from `$table` limit 0,1" );
$fields = $info->fetchRow();
if (!array_key_exists("admin_edit", $fields)) {
	/**
	 *	Call from the upgrade-script
	 */
	
	if (function_exists('db_add_field')) {
		db_add_field("admin_edit", 'mod_droplets', "INT NOT NULL default '0'");
		db_add_field("admin_view", 'mod_droplets', "INT NOT NULL default '0'");
		db_add_field("show_wysiwyg", 'mod_droplets', "INT NOT NULL default '0'");
	} else {
		/**
		 * Not call by the upgrade-script
		 */
		$database->query("ALTER TABLE `$table` (
			`admin_edit` INT NOT NULL default '0',
			`admin_view` INT NOT NULL default '0',
			`show_wysiwyg` INT NOT NULL default '0'
			)");
	}
}
?>