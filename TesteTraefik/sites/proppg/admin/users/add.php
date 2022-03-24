<?php

// $Id: add.php 915 2009-01-21 19:27:01Z Ruebenwurzel $

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

// Print admin header
require('../../config.php');
require_once(WB_PATH.'/framework/class.admin.php');
$admin = new admin('Access', 'users_add');

// Create new database object
$database = new database();

// Get details entered
$groups_id = implode(",", $admin->add_slashes($_POST['groups'])); //should check permissions
$groups_id = trim($groups_id, ','); // there will be an additional ',' when "Please Choose" was selected, too
$active = $admin->add_slashes($_POST['active'][0]);
$username_fieldname = $admin->get_post_escaped('username_fieldname');
$username = strtolower($admin->get_post_escaped($username_fieldname));
$password = $admin->get_post('password');
$password2 = $admin->get_post('password2');
$display_name = $admin->get_post_escaped('display_name');
$email = $admin->get_post_escaped('email');
$home_folder = $admin->get_post_escaped('home_folder');
$default_language = DEFAULT_LANGUAGE;

// Create a javascript back link
$js_back = 'javascript: history.go(-1);';

// Check values
if($groups_id == '') {
	$admin->print_error($MESSAGE['USERS']['NO_GROUP'], $js_back);
}
if(strlen($username) < 2) {
	$admin->print_error($MESSAGE['USERS']['USERNAME_TOO_SHORT'], $js_back);
}
if(strlen($password) < 2) {
	$admin->print_error($MESSAGE['USERS']['PASSWORD_TOO_SHORT'], $js_back);
}
if($password != $password2) {
	$admin->print_error($MESSAGE['USERS']['PASSWORD_MISMATCH'], $js_back);
}
if($email != '') {
	if($admin->validate_email($email) == false) {
		$admin->print_error($MESSAGE['USERS']['INVALID_EMAIL'], $js_back);
	}
}

// choose group_id from groups_id - workaround for still remaining calls to group_id (to be cleaned-up)
$gid_tmp = explode(',', $groups_id);
if(in_array('1', $gid_tmp)) $group_id = '1'; // if user is in administrator-group, get this group
else $group_id = $gid_tmp[0]; // else just get the first one
unset($gid_tmp);

// Check if username already exists
$results = $database->query("SELECT user_id FROM ".TABLE_PREFIX."users WHERE username = '$username'");
if($results->numRows() > 0) {
	$admin->print_error($MESSAGE['USERS']['USERNAME_TAKEN'], $js_back);
}

// Check if the email already exists
$results = $database->query("SELECT user_id FROM ".TABLE_PREFIX."users WHERE email = '".$admin->add_slashes($_POST['email'])."'");
if($results->numRows() > 0) {
	if(isset($MESSAGE['USERS']['EMAIL_TAKEN'])) {
		$admin->print_error($MESSAGE['USERS']['EMAIL_TAKEN'], $js_back);
	} else {
		$admin->print_error($MESSAGE['USERS']['INVALID_EMAIL'], $js_back);
	}
}

// MD5 supplied password
$md5_password = md5($password);

// Inser the user into the database
$query = "INSERT INTO ".TABLE_PREFIX."users (group_id,groups_id,active,username,password,display_name,home_folder,email,timezone, language) VALUES ('$group_id', '$groups_id', '$active', '$username','$md5_password','$display_name','$home_folder','$email','-72000', '$default_language')";
$database->query($query);
if($database->is_error()) {
	$admin->print_error($database->get_error());
} else {
	$admin->print_success($MESSAGE['USERS']['ADDED']);
}

// Print admin footer
$admin->print_footer();

?>