<?php

// $Id: index.php 944 2009-02-22 09:39:58Z Ruebenwurzel $

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
require_once(WB_PATH.'/framework/class.admin.php');
$admin = new admin('admintools', 'admintools');

// Include the WB functions file
require_once(WB_PATH.'/framework/functions.php');

// Create new template object
$template = new Template(THEME_PATH.'/templates');
$template->set_file('page', 'admintools.htt');
$template->set_block('page', 'main_block', 'main');

// Insert required template variables
$template->set_var('ADMIN_URL', ADMIN_URL);
$template->set_var('THEME_URL', THEME_URL);
$template->set_var('HEADING_ADMINISTRATION_TOOLS', $HEADING['ADMINISTRATION_TOOLS']);

// Insert tools into tool list
$template->set_block('main_block', 'tool_list_block', 'tool_list');
$results = $database->query("SELECT * FROM ".TABLE_PREFIX."addons WHERE type = 'module' AND function = 'tool' order by name");
if($results->numRows() > 0) {
	while($tool = $results->fetchRow()) {
		$template->set_var('TOOL_NAME', $tool['name']);
		$template->set_var('TOOL_DIR', $tool['directory']);
		// check if a module description exists for the displayed backend language
		$tool_description = false;
		if(function_exists('file_get_contents') && file_exists(WB_PATH.'/modules/'.$tool['directory'].'/languages/'.LANGUAGE .'.php')) {
			// read contents of the module language file into string
			$data = @file_get_contents(WB_PATH .'/modules/' .$tool['directory'] .'/languages/' .LANGUAGE .'.php');
			$tool_description = get_variable_content('module_description', $data, true, false);
		}		
		$template->set_var('TOOL_DESCRIPTION', ($tool_description === False)? $tool['description'] :$tool_description);
		$template->parse('tool_list', 'tool_list_block', true);
	}
} else {
	$template->set_var('TOOL_LIST', $TEXT['NONE_FOUND']);	
}

// Parse template objects output
$template->parse('main', 'main_block', false);
$template->pparse('output', 'page');

$admin->print_footer();

?>