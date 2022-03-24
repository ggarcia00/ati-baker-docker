<?php

/****************************************************************************
* SVN Version information:
*
* $Id: details.php 1214 2009-12-14 14:49:42Z MaGnaL $
*
*****************************************************************************
*
*****************************************************************************
*                          WebsiteBaker
*
* WebsiteBaker Project <http://www.websitebaker2.org/>
* Copyright (C) 2009, Website Baker Org. e.V.
*         http://start.websitebaker2.org/impressum-datenschutz.php
* Copyright (C) 2004-2009, Ryan Djurovich
*
*                        About WebsiteBaker
*
* Website Baker is a PHP-based Content Management System (CMS)
* designed with one goal in mind: to enable its users to produce websites
* with ease.
*
*****************************************************************************
*
*****************************************************************************
*                   WebsiteBaker Extra Information (where needed)
*
* @author       : Ryan Djurovich, stefan, Matthias Gallas, Manuel Lang
* @platform     : WebsiteBaker 2.8
*
*****************************************************************************
*
*****************************************************************************
*                        LICENSE INFORMATION
*
* WebsiteBaker is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License
* as published by the Free Software Foundation; either version 2
* of the License, or (at your option) any later version.
*
* WebsiteBaker is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*****************************************************************************/

// Print admin header
require('../../config.php');
require_once(WB_PATH.'/framework/class.admin.php');
$admin = new admin('Preferences');

// Get entered values
$display_name = $admin->add_slashes(strip_tags($admin->get_post('display_name')));
$language = $admin->get_post('language');
$timezone = $admin->get_post('timezone')*60*60;
$date_format = $admin->get_post('date_format');
$time_format = $admin->get_post('time_format');

// Update the database
$database = new database();
$query = "UPDATE ".TABLE_PREFIX."users SET display_name = '$display_name', language = '$language', timezone = '$timezone', date_format = '$date_format', time_format = '$time_format' WHERE user_id = '".$admin->get_user_id()."'";
$database->query($query);
if($database->is_error()) {
	$admin->print_error($database->get_error());
} else {
	$admin->print_success($MESSAGE['PREFERENCES']['DETAILS_SAVED']);
	$_SESSION['DISPLAY_NAME'] = $display_name;
	$_SESSION['LANGUAGE'] = $language;
	// Update date format
	if($date_format != '') {
		$_SESSION['DATE_FORMAT'] = $date_format;
		if(isset($_SESSION['USE_DEFAULT_DATE_FORMAT'])) { unset($_SESSION['USE_DEFAULT_DATE_FORMAT']); }
	} else {
		$_SESSION['USE_DEFAULT_DATE_FORMAT'] = true;
		if(isset($_SESSION['DATE_FORMAT'])) { unset($_SESSION['DATE_FORMAT']); }
	}
	// Update time format
	if($time_format != '') {
		$_SESSION['TIME_FORMAT'] = $time_format;
		if(isset($_SESSION['USE_DEFAULT_TIME_FORMAT'])) { unset($_SESSION['USE_DEFAULT_TIME_FORMAT']); }
	} else {
		$_SESSION['USE_DEFAULT_TIME_FORMAT'] = true;
		if(isset($_SESSION['TIME_FORMAT'])) { unset($_SESSION['TIME_FORMAT']); }
	}
	// Update timezone
	if($timezone != '-72000') {
		$_SESSION['TIMEZONE'] = $timezone;
		if(isset($_SESSION['USE_DEFAULT_TIMEZONE'])) { unset($_SESSION['USE_DEFAULT_TIMEZONE']); }
	} else {
		$_SESSION['USE_DEFAULT_TIMEZONE'] = true;
		if(isset($_SESSION['TIMEZONE'])) { unset($_SESSION['TIMEZONE']); }
	}
}

// Print admin footer
$admin->print_footer();

?>