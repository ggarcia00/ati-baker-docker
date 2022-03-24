<?php

// $Id: parameters.php 1035 2009-07-06 22:34:35Z Ruebenwurzel $

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

function __unserialize($sObject) {  // found in php manual :-)
	$__ret =preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $sObject );
	return unserialize($__ret);
}
$pathsettings = array();
$query = $database->query ( "SELECT * FROM ".TABLE_PREFIX."settings where `name`='mediasettings'" );
if ($query && $query->numRows() > 0) {
	$settings = $query->fetchRow();
	$pathsettings = __unserialize($settings['value']);
} else {
	$database->query ( "INSERT INTO ".TABLE_PREFIX."settings (`name`,`value`) VALUES ('mediasettings','')" );
}

?>