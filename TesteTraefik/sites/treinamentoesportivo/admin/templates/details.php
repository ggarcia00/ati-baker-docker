<?php

// $Id: details.php 1166 2009-10-12 16:54:26Z Luisehahne $

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

// Include the config file
require('../../config.php');
require_once(WB_PATH .'/framework/functions.php');
require_once(WB_PATH.'/framework/class.admin.php');
$admin = new admin('Addons', 'templates_view',false);

// Get template name
if(!isset($_POST['file']) OR $_POST['file'] == "") {
	header("Location: index.php");
	exit(0);
} else {
	$file = $admin->add_slashes($_POST['file']);
}

// Check if the template exists
if(!file_exists(WB_PATH.'/templates/'.$file)) {
	header("Location: index.php");
	exit(0);
}

// Print admin header
$admin = new admin('Addons', 'templates_view');

// Setup template object
$template = new Template(THEME_PATH.'/templates');
$template->set_file('page', 'templates_details.htt');
$template->set_block('page', 'main_block', 'main');

// Insert values
$result = $database->query("SELECT * FROM ".TABLE_PREFIX."addons WHERE type = 'template' AND directory = '$file'");
if($result->numRows() > 0) {
	$row = $result->fetchRow();
}

// check if a template description exists for the displayed backend language
$tool_description = false;
if(function_exists('file_get_contents') && file_exists(WB_PATH.'/templates/'.$file.'/languages/'.LANGUAGE .'.php')) {
	// read contents of the template language file into string
	$data = @file_get_contents(WB_PATH .'/templates/' .$file .'/languages/' .LANGUAGE .'.php');
	// use regular expressions to fetch the content of the variable from the string
	$tool_description = get_variable_content('template_description', $data, false, false);
	// replace optional placeholder {WB_URL} with value stored in config.php
	if($tool_description !== false && strlen(trim($tool_description)) != 0) {
		$tool_description = str_replace('{WB_URL}', WB_URL, $tool_description);
	} else {
		$tool_description = false;
	}
}
if($tool_description !== false) {
	// Override the template-description with correct desription in users language
	$row['description'] = $tool_description;
}	

$template->set_var(array(
								'NAME' => $row['name'],
								'AUTHOR' => $row['author'],
								'DESCRIPTION' => $row['description'],
								'VERSION' => $row['version'],
								'DESIGNED_FOR' => $row['platform']
								)
						);

// Insert language headings
$template->set_var(array(
								'HEADING_TEMPLATE_DETAILS' => $HEADING['TEMPLATE_DETAILS']
								)
						);
// Insert language text and messages
$template->set_var(array(
								'TEXT_NAME' => $TEXT['NAME'],
								'TEXT_AUTHOR' => $TEXT['AUTHOR'],
								'TEXT_VERSION' => $TEXT['VERSION'],
								'TEXT_DESIGNED_FOR' => $TEXT['DESIGNED_FOR'],
								'TEXT_DESCRIPTION' => $TEXT['DESCRIPTION'],
								'TEXT_BACK' => $TEXT['BACK']
								)
						);

// Parse template object
$template->parse('main', 'main_block', false);
$template->pparse('output', 'page');

// Print admin footer
$admin->print_footer();

?>