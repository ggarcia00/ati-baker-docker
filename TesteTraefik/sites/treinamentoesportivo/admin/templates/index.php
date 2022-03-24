<?php

// $Id: index.php 1035 2009-07-06 22:34:35Z Ruebenwurzel $

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
$admin = new admin('Addons', 'templates');

// Setup template object
$template = new Template(THEME_PATH.'/templates');
$template->set_file('page', 'templates.htt');
$template->set_block('page', 'main_block', 'main');

// Insert values into template list
$template->set_block('main_block', 'template_list_block', 'template_list');
$result = $database->query("SELECT * FROM ".TABLE_PREFIX."addons WHERE type = 'template' order by name");
if($result->numRows() > 0) {
	while($addon = $result->fetchRow()) {
		$template->set_var('VALUE', $addon['directory']);
		$template->set_var('NAME', $addon['name']);
		$template->parse('template_list', 'template_list_block', true);
	}
}

// Insert permissions values
if($admin->get_permission('templates_install') != true) {
	$template->set_var('DISPLAY_INSTALL', 'hide');
}
if($admin->get_permission('templates_uninstall') != true) {
	$template->set_var('DISPLAY_UNINSTALL', 'hide');
}
if($admin->get_permission('templates_view') != true) {
	$template->set_var('DISPLAY_LIST', 'hide');
}

// Insert language headings
$template->set_var(array(
								'HEADING_INSTALL_TEMPLATE' => $HEADING['INSTALL_TEMPLATE'],
								'HEADING_UNINSTALL_TEMPLATE' => $HEADING['UNINSTALL_TEMPLATE'],
								'HEADING_TEMPLATE_DETAILS' => $HEADING['TEMPLATE_DETAILS']
								)
						);
// Insert language text and messages
$template->set_var(array(
	'URL_MODULES' => $admin->get_permission('modules') ? 
		'<a href="' . ADMIN_URL . '/modules/index.php">' . $MENU['MODULES'] . '</a>' : '',
	'URL_LANGUAGES' => $admin->get_permission('languages') ? 
		'<a href="' . ADMIN_URL . '/languages/index.php">' . $MENU['LANGUAGES'] . '</a>' : '',
	'URL_ADVANCED' => $admin->get_permission('admintools') ? 
	'<a href="' . ADMIN_URL . '/modules/index.php?advanced">' . $TEXT['ADVANCED'] . '</a>' : '',
	'TEXT_INSTALL' => $TEXT['INSTALL'],
	'TEXT_UNINSTALL' => $TEXT['UNINSTALL'],
	'TEXT_VIEW_DETAILS' => $TEXT['VIEW_DETAILS'],
	'TEXT_PLEASE_SELECT' => $TEXT['PLEASE_SELECT'],
	'CHANGE_TEMPLATE_NOTICE' => $MESSAGE['TEMPLATES']['CHANGE_TEMPLATE_NOTICE']
	)
);

// Parse template object
$template->parse('main', 'main_block', false);
$template->pparse('output', 'page');

// Print admin footer
$admin->print_footer();

?>