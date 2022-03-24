<?php

// $Id: time_formats.php 1059 2009-07-13 14:03:49Z aldus $

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

/*

Time format list file

This file is used to generate a list of time formats for the user to select

*/

if(!defined('WB_URL')) {
	header('Location: ../../../index.php');
	exit(0);
}

// Define that this file is loaded
if(!defined('TIME_FORMATS_LOADED')) {
	define('TIME_FORMATS_LOADED', true);
}

// Create array
$TIME_FORMATS = array();

// Get the current time (in the users timezone if required)
$actual_time = time()+ ((isset($user_time) AND $user_time == true) ? TIMEZONE : DEFAULT_TIMEZONE);

// Add values to list
$TIME_FORMATS['g:i|A'] = gmdate('g:i A', $actual_time);
$TIME_FORMATS['g:i|a'] = gmdate('g:i a', $actual_time);
$TIME_FORMATS['H:i:s'] = gmdate('H:i:s', $actual_time);
$TIME_FORMATS['H:i'] = gmdate('H:i', $actual_time);

// Add "System Default" to list (if we need to)
if(isset($user_time) AND $user_time == true) {
	if(isset($TEXT['SYSTEM_DEFAULT'])) {
		$TIME_FORMATS['system_default'] = gmdate(DEFAULT_TIME_FORMAT, $actual_time).' ('.$TEXT['SYSTEM_DEFAULT'].')';
	} else {
		$TIME_FORMATS['system_default'] = gmdate(DEFAULT_TIME_FORMAT, $actual_time).' (System Default)';
	}
}

// Reverse array so "System Default" is at the top
$TIME_FORMATS = array_reverse($TIME_FORMATS, true);

?>