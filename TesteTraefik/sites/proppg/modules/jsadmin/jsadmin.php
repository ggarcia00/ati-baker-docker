<?php

// $Id: jsadmin.php 915 2009-01-21 19:27:01Z Ruebenwurzel $

// JsAdmin module for Website Baker
// Copyright (C) 2006, Stepan Riha
// www.nonplus.net

// modified by Swen Uth for Website Baker 2.7

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

function get_setting($name, $default = '') {
	global $database;
	$rs = $database->query("SELECT value FROM ".TABLE_PREFIX."mod_jsadmin WHERE name = '".$name."'");
	if($row = $rs->fetchRow())
		return $row['value'];
	return
		$default;
}

function save_setting($name, $value) {
	global $database;

	$prev_value = get_setting($name, false);

	if($prev_value === false) {
		$database->query("INSERT INTO ".TABLE_PREFIX."mod_jsadmin (name,value) VALUES ('$name','$value')");
	} else {
		$database->query("UPDATE ".TABLE_PREFIX."mod_jsadmin SET value = '$value' WHERE name = '$name'");
	}
}

// the follwing variables to use and check existing the YUI
$WB_MAIN_RELATIVE_PATH="../..";
$YUI_PATH = '/include/yui';
$js_yui_min = "-min";  // option for smaller code so faster
$js_yui_scripts = Array();
$js_yui_scripts[] = $YUI_PATH.'/yahoo/yahoo'.$js_yui_min.'.js';
$js_yui_scripts[] = $YUI_PATH.'/event/event'.$js_yui_min.'.js';
$js_yui_scripts[] = $YUI_PATH.'/dom/dom'.$js_yui_min.'.js';
$js_yui_scripts[] = $YUI_PATH.'/connection/connection'.$js_yui_min.'.js';
$js_yui_scripts[] = $YUI_PATH.'/dragdrop/dragdrop'.$js_yui_min.'.js';

?>