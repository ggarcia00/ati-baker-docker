<?php

// $Id: move_to.php 915 2009-01-21 19:27:01Z Ruebenwurzel $

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

require('../../config.php');

 if(isset($_GET['page_id']) AND is_numeric($_GET['page_id']) AND is_numeric(@$_GET['position'])) {
	$position = $_GET['position'];

	// Include WB admin wrapper script
	$update_when_modified = true; // Tells script to update when this page was last updated
	require(WB_PATH.'/modules/admin.php');

	// Get common fields
	if(isset($_GET['section_id']) AND is_numeric($_GET['section_id'])) {
		$page_id = $_GET['page_id'];
		$id = $_GET['section_id'];
		$id_field = 'section_id';
		$common_field = 'page_id';
		$table = TABLE_PREFIX.'sections';
	} else {
		$id = $_GET['page_id'];
		$id_field = 'page_id';
		$common_field = 'parent';
		$table = TABLE_PREFIX.'pages';
	}

	// Get current index
	$sql = <<<EOT
SELECT $common_field, position FROM $table WHERE $id_field = $id
EOT;
	echo "$sql<br>";
	$rs = $database->query($sql);
	if($row = $rs->fetchRow()) {
		$common_id = $row[$common_field];
		$old_position = $row['position'];
	}
	echo "$old_position<br>";
	if($old_position == $position)
		return;
	
	// Build query to update affected rows
	if($old_position < $position)
		$sql = <<<EOT
UPDATE $table SET position = position - 1
	WHERE position > $old_position AND position <= $position
		AND $common_field = $common_id
EOT;
	else
		$sql = <<<EOT
UPDATE $table SET position = position + 1
	WHERE position >= $position AND position < $old_position
		AND $common_field = $common_id
EOT;
	echo "<pre>$sql</pre>";
	$database->query($sql);

	// Build query to update specified row
	$sql = <<<EOT
UPDATE $table SET position = $position
	WHERE $id_field = $id
EOT;
	echo "<pre>$sql</pre>";
	$database->query($sql);
} else {
	die("Missing parameters");
	header("Location: index.php");
	exit(0);
}
?>
