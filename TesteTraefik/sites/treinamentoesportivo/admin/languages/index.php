<?php

// $Id: index.php 1112 2009-08-08 14:28:54Z Ruebenwurzel $

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
$admin = new admin('Addons', 'languages');

// Setup template object
$template = new Template(THEME_PATH.'/templates');
$template->set_file('page', 'languages.htt');
$template->set_block('page', 'main_block', 'main');

// Insert values into language list
$template->set_block('main_block', 'language_list_block', 'language_list');
$result = $database->query("SELECT * FROM ".TABLE_PREFIX."addons WHERE type = 'language' order by name");
if($result->numRows() > 0) {
	while($addon = $result->fetchRow()) {
		$template->set_var('VALUE', $addon['directory']);
		$template->set_var('NAME', $addon['name'].' ('.$addon['directory'].')');
		$template->parse('language_list', 'language_list_block', true);
	}
}

// Insert permissions values
if($admin->get_permission('languages_install') != true) {
	$template->set_var('DISPLAY_INSTALL', 'hide');
}
if($admin->get_permission('languages_uninstall') != true) {
	$template->set_var('DISPLAY_UNINSTALL', 'hide');
}
if($admin->get_permission('languages_view') != true) {
	$template->set_var('DISPLAY_LIST', 'hide');
}

// Insert language headings
$template->set_var(array(
								'HEADING_INSTALL_LANGUAGE' => $HEADING['INSTALL_LANGUAGE'],
								'HEADING_UNINSTALL_LANGUAGE' => $HEADING['UNINSTALL_LANGUAGE'],
								'HEADING_LANGUAGE_DETAILS' => $HEADING['LANGUAGE_DETAILS']
								)
						);
// insert urls
$template->set_var(array(
								'ADMIN_URL' => ADMIN_URL,
								'WB_URL' => WB_URL,
								'WB_PATH' => WB_PATH,
								'THEME_URL' => THEME_URL
								)
						);
// Insert language text and messages
$template->set_var(array(
	'URL_MODULES' => $admin->get_permission('modules') ? 
		'<a href="' . ADMIN_URL . '/modules/index.php">' . $MENU['MODULES'] . '</a>' : '',
	'URL_ADVANCED' => $admin->get_permission('admintools') ? 
		'<a href="' . ADMIN_URL . '/modules/index.php?advanced">' . $TEXT['ADVANCED'] . '</a>' : '',		
	'URL_TEMPLATES' => $admin->get_permission('templates') ? 
		'<a href="' . ADMIN_URL . '/templates/index.php">' . $MENU['TEMPLATES'] . '</a>' : '',
	'TEXT_INSTALL' => $TEXT['INSTALL'],
	'TEXT_UNINSTALL' => $TEXT['UNINSTALL'],
	'TEXT_VIEW_DETAILS' => $TEXT['VIEW_DETAILS'],
	'TEXT_PLEASE_SELECT' => $TEXT['PLEASE_SELECT']
	)
);

// Parse template object
$template->parse('main', 'main_block', false);
$template->pparse('output', 'page');

// Print admin footer
$admin->print_footer();

?>