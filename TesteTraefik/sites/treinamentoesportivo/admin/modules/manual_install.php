<?php
/**
 * $Id: manual_install.php 938 2009-02-19 19:13:24Z doc $
 * Website Baker Manual module installation
 *
 * This file contains the function to invoke the module install or upgrade
 * scripts update the Add-on information from the
 * database with the ones stored in the Add-on files (e.g. info.php or EN.php)
 *
 * LICENSE: GNU Lesser General Public License 3.0
 * 
 * @author		Christian Sommer
 * @copyright	(c) 2009
 * @license		http://www.gnu.org/copyleft/lesser.html
 * @version		0.2.0
 * @platform	Website Baker 2.7
 *
 * Website Baker Project <http://www.websitebaker.org/>
 * Copyright (C) 2004-2009, Ryan Djurovich
 *
 * Website Baker is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Website Baker is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Website Baker; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/**
 * check if there is anything to do
 */
if (!(isset($_POST['action']) && in_array($_POST['action'], array('install', 'upgrade', 'uninstall')))) die(header('Location: index.php?advanced'));
if (!(isset($_POST['file']) && $_POST['file'] != '' && (strpos($_POST['file'], '..') === false))) die(header('Location: index.php?advanced'));

/**
 * check if user has permissions to access this file
 */
// include WB configuration file and WB admin class
require_once('../../config.php');
require_once('../../framework/class.admin.php');

// check user permissions for admintools (redirect users with wrong permissions)
$admin = new admin('Admintools', 'admintools', false, false);
if ($admin->get_permission('admintools') == false) die(header('Location: ../../index.php'));

// check if the referer URL if available
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 
	(isset($HTTP_SERVER_VARS['HTTP_REFERER']) ? $HTTP_SERVER_VARS['HTTP_REFERER'] : '');

// if referer is set, check if script was invoked from "admin/modules/index.php"
$required_url = ADMIN_URL . '/modules/index.php';
if ($referer != '' && (!(strpos($referer, $required_url) !== false || strpos($referer, $required_url) !== false))) 
	die(header('Location: ../../index.php'));

// include WB functions file
require_once(WB_PATH . '/framework/functions.php');

// load WB language file
require_once(WB_PATH . '/languages/' . LANGUAGE .'.php');

// create Admin object with admin header
$admin = new admin('Addons', '', true, false);
$js_back = ADMIN_URL . '/modules/index.php?advanced';

/**
 * Manually execute the specified module file (install.php, upgrade.php or uninstall.php)
 */
// check if specified module folder exists
$mod_path = WB_PATH . '/modules/' . basename(WB_PATH . '/' . $_POST['file']);
if (!file_exists($mod_path . '/' . $_POST['action'] . '.php')) $admin->print_error($TEXT['NOT_FOUND'] . ': <tt>"' . htmlentities(basename($mod_path)) . '/' . $_POST['action'] . '.php"</tt> ', $js_back);

// include modules install.php script
require($mod_path . '/' . $_POST['action'] . '.php');

// load module info into database and output status message
load_module($mod_path, false);
$msg = $TEXT['EXECUTE'] . ': <tt>"' . htmlentities(basename($mod_path)) . '/' . $_POST['action'] . '.php"</tt>';

switch ($_POST['action']) {
	case 'install':
		$admin->print_success($msg, $js_back);
		break;

	case 'upgrade':
		$admin->print_success($msg, $js_back);
		break;
	
	case 'uninstall':
		$admin->print_success($msg, $js_back);
		break;
}

?>