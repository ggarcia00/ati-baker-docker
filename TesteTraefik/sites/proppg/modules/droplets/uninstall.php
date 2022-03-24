<?php

// $Id: uninstall.php 991 2009-06-15 15:55:20Z Ruebenwurzel $

/*
*	@version	1.0
*	@author		Ruud Eisinga (Ruud) John (PCWacht)
*	@date		June 2009
*
*	droplets are small codeblocks that are called from anywhere in the template. 
* 	To call a droplet just use [[dropletname]]. optional parameters for a droplet can be used like [[dropletname?parameter=value&parameter2=value]]
*/

// prevent this file from being accessed directly
if(!defined('WB_PATH')) die(header('Location: ../index.php'));

$table = TABLE_PREFIX .'mod_droplets';
$database->query("DROP TABLE IF EXISTS `$table`");

?>