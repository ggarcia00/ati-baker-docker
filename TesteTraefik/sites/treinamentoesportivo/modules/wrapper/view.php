<?php

// $Id: view.php 1029 2009-07-03 14:28:09Z Ruebenwurzel $

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

// check if module language file exists for the language set by the user (e.g. DE, EN)
if(!file_exists(WB_PATH .'/modules/wrapper/languages/'.LANGUAGE .'.php')) {
	// no module language file exists for the language set by the user, include default module language file EN.php
	require_once(WB_PATH .'/modules/wrapper/languages/EN.php');
} else {
	// a module language file exists for the language defined by the user, load it
	require_once(WB_PATH .'/modules/wrapper/languages/'.LANGUAGE .'.php');
}

// get url
$get_settings = $database->query("SELECT url,height FROM ".TABLE_PREFIX."mod_wrapper WHERE section_id = '$section_id'");
$fetch_settings = $get_settings->fetchRow();
$url = ($fetch_settings['url']);

?>
<iframe src="<?php echo $url; ?>" width="100%" height="<?php echo $fetch_settings['height']; ?>" frameborder="0" scrolling="auto">
<?php echo $MOD_WRAPPER['NOTICE']; ?>
<a href="<?php echo $url; ?>" target="_blank"><?php echo $url; ?></a>
</iframe>