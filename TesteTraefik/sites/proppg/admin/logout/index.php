<?php

// $Id: index.php 932 2009-02-16 18:36:44Z doc $

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

// delete remember key of current user from database
if (isset($_SESSION['USER_ID']) && isset($database)) {
	$table = TABLE_PREFIX . 'users';
	$sql = "UPDATE `$table` SET `remember_key` = '' WHERE `user_id` = '" . (int) $_SESSION['USER_ID'] . "'";
	$database->query($sql);
}

// delete remember key cookie if set
if (isset($_COOKIE['REMEMBER_KEY'])) {
	setcookie('REMEMBER_KEY', '', time() - 3600, '/');
}

// delete most critical session variables manually
$_SESSION['USER_ID'] = null;
$_SESSION['GROUP_ID'] = null;
$_SESSION['GROUPS_ID'] = null;
$_SESSION['USERNAME'] = null;
$_SESSION['PAGE_PERMISSIONS'] = null;
$_SESSION['SYSTEM_PERMISSIONS'] = null;

// overwrite session array
$_SESSION = array();

// delete session cookie if set
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

// delete the session itself
session_destroy();

// redirect to admin login
die(header('Location: ' . ADMIN_URL . '/login/index.php'));

?>