<?php

// $Id: jsadmin_backend_include.php 1048 2009-07-08 20:45:30Z Ruebenwurzel $

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

// Direct access prevention
defined('WB_PATH') OR die(header('Location: ../index.php'));

// obtain the admin folder (e.g. /admin)
$admin_folder = str_replace(WB_PATH, '', ADMIN_PATH);

$JSADMIN_PATH = WB_URL.'/modules/jsadmin';
$YUI_PATH = WB_URL.'/include/yui';
$script = $_SERVER['SCRIPT_NAME'];
if(!$script)
	$script = $PHP_SELF;

if(strstr($script, $admin_folder."/pages/index.php"))
	$page_type = 'pages';
elseif(strstr($script, $admin_folder."/pages/sections.php"))
	$page_type = 'sections';
elseif(strstr($script, $admin_folder."/settings/tool.php")
	&& isset($_REQUEST["tool"]) && $_REQUEST["tool"] == 'jsadmin')
	$page_type = 'config';
else
	$page_type = '';
if($page_type) {
	require_once(WB_PATH.'/modules/jsadmin/jsadmin.php');

	// Default scripts
	$js_buttonCell = 3;
	$js_scripts = Array();
	$js_scripts[] = 'jsadmin.js';

	if($page_type == 'pages') {
		if(!get_setting('mod_jsadmin_persist_order', '1')) {   //Maybe Bug settings to negativ for persist , by Swen Uth
			$js_scripts[] = 'restore_pages.js';
  		}
		if(get_setting('mod_jsadmin_ajax_order_pages', '1')) {
			$js_scripts[] = 'dragdrop.js';
			$js_buttonCell= 7; // This ist the Cell where the Button "Up" is , by Swen Uth
		}
	} elseif($page_type == 'sections') {
		if(get_setting('mod_jsadmin_ajax_order_sections', '1')) {
			$js_scripts[] = 'dragdrop.js';
			if(SECTION_BLOCKS) {
			$js_buttonCell= 5;}
      else{ $js_buttonCell= 5;} // This ist the Cell where the Button "Up" is , by Swen Uth
		}
	} elseif($page_type == 'config') {
		$js_scripts[] = 'tool.js';
	}
?>

<script  type="text/javascript" language="JavaScript">
<!--
var JsAdmin = { WB_URL : '<?php echo WB_URL ?>', ADMIN_URL : '<?php echo ADMIN_URL ?>' };
var JsAdminTheme = { THEME_URL : '<?php echo THEME_URL ?>' };
//-->
</script>
<?php
 // For variable cell structure in the tables of admin content
  echo "<script type='text/javascript'>buttonCell=".$js_buttonCell.";</script>\n";   // , by Swen  Uth

 // Check and Load the needed YUI functions  //, all by Swen Uth
  $YUI_ERROR=false; // ist there an Error
  $YUI_PUT ='';   // String with javascipt includes
  $YUI_PUT_MISSING_Files=''; // Strin with missing files
  reset($js_yui_scripts);
  foreach($js_yui_scripts as $script) {
    if(file_exists($WB_MAIN_RELATIVE_PATH.$script)){
        $YUI_PUT=$YUI_PUT."<script type='text/javascript' src='".$WB_MAIN_RELATIVE_PATH.$script."'></script>\n"; // go and include
    } else {
        $YUI_ERROR=true;
        $YUI_PUT_MISSING_Files=$YUI_PUT_MISSING_Files."- ".WB_URL.$script."\\n";   // catch all missing files
    }
	}
	if(!$YUI_ERROR)
	{
    echo $YUI_PUT;  // no Error so go and include
    // Load the needed functions
	  foreach($js_scripts as $script) {
		  echo "<script type='text/javascript' src='".$JSADMIN_PATH."/js/".$script."'></script>\n";
	  }
  } else  {
      echo "<script type='text/javascript'>alert('YUI ERROR!! File not Found!! > \\n".$YUI_PUT_MISSING_Files." so look in the include folder or switch Javascript Admin off!');</script>\n"; //, by Swen Uth
  }

 }
?>