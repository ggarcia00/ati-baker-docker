<?php
/**
 *
 * @category        admin
 * @package         pages
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: sections.php 1277 2010-01-28 05:18:18Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/admin/pages/sections.php $
 * @lastmodified    $Date: 2010-01-28 06:18:18 +0100 (Do, 28. Jan 2010) $
 *
 */

// Include config file
require('../../config.php');

// Make sure people are allowed to access this page
if(MANAGE_SECTIONS != 'enabled') {
	header('Location: '.ADMIN_URL.'/pages/index.php');
	exit(0);
}

// Get page id
if(!isset($_GET['page_id']) OR !is_numeric($_GET['page_id'])) {
	header("Location: index.php");
	exit(0);
} else {
	$page_id = $_GET['page_id'];
}

$debug = false; // to show position and section_id

// Create new admin object
require_once(WB_PATH.'/framework/class.admin.php');
$admin = new admin('Pages', 'pages_modify');

// Check if we are supposed to add or delete a section
if(isset($_GET['section_id']) AND is_numeric($_GET['section_id'])) {
	// Get more information about this section
	$section_id = $_GET['section_id'];
	$query_section = $database->query("SELECT module FROM ".TABLE_PREFIX."sections WHERE section_id = '$section_id'");
	if($query_section->numRows() == 0) {
		$admin->print_error('Section not found');
	}
	$section = $query_section->fetchRow();
	// Include the modules delete file if it exists
	if(file_exists(WB_PATH.'/modules/'.$section['module'].'/delete.php')) {
		require(WB_PATH.'/modules/'.$section['module'].'/delete.php');
	}
    $sql = '';
	$database->query("DELETE FROM ".TABLE_PREFIX."sections WHERE section_id = '$section_id' LIMIT 1");
	if($database->is_error()) {
		$admin->print_error($database->get_error());
	} else {
		require(WB_PATH.'/framework/class.order.php');
		$order = new order(TABLE_PREFIX.'sections', 'position', 'section_id', 'page_id');
		$order->clean($page_id);
		$admin->print_success($TEXT['SUCCESS'], ADMIN_URL.'/pages/sections.php?page_id='.$page_id);
		$admin->print_footer();
		exit();
	}
} elseif(isset($_POST['module']) AND $_POST['module'] != '') {
	// Get section info
	$module = $admin->add_slashes($_POST['module']);
	// Include the ordering class
	require(WB_PATH.'/framework/class.order.php');
	// Get new order
	$order = new order(TABLE_PREFIX.'sections', 'position', 'section_id', 'page_id');
	$position = $order->get_new($page_id);	
	// Insert module into DB
	$database->query("INSERT INTO ".TABLE_PREFIX."sections (page_id,module,position,block) VALUES ('$page_id','$module','$position','1')");
	// Get the section id
	$section_id = $database->get_one("SELECT LAST_INSERT_ID()");	
	// Include the selected modules add file if it exists
	if(file_exists(WB_PATH.'/modules/'.$module.'/add.php')) {
		require(WB_PATH.'/modules/'.$module.'/add.php');
	}
}

// Get perms
$database = new database();
$results = $database->query("SELECT admin_groups,admin_users FROM ".TABLE_PREFIX."pages WHERE page_id = '$page_id'");
$results_array = $results->fetchRow();
$old_admin_groups = explode(',', $results_array['admin_groups']);
$old_admin_users = explode(',', $results_array['admin_users']);
$in_old_group = FALSE;
foreach($admin->get_groups_id() as $cur_gid){
	if (in_array($cur_gid, $old_admin_groups)) {
		$in_old_group = TRUE;
	}
}
if((!$in_old_group) AND !is_numeric(array_search($admin->get_user_id(), $old_admin_users))) {
	$admin->print_error($MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS']);
}

// Get page details
$database = new database();
$query = "SELECT * FROM ".TABLE_PREFIX."pages WHERE page_id = '$page_id'";
$results = $database->query($query);
if($database->is_error()) {
	$admin->print_header();
	$admin->print_error($database->get_error());
}
if($results->numRows() == 0) {
	$admin->print_header();
	$admin->print_error($MESSAGE['PAGES']['NOT_FOUND']);
}
$results_array = $results->fetchRow();

// Set module permissions
$module_permissions = $_SESSION['MODULE_PERMISSIONS'];

// Unset block var
unset($block);
// Include template info file (if it exists)
if($results_array['template'] != '') {
	$template_location = WB_PATH.'/templates/'.$results_array['template'].'/info.php';
} else {
	$template_location = WB_PATH.'/templates/'.DEFAULT_TEMPLATE.'/info.php';
}
if(file_exists($template_location)) {
	require($template_location);
}
// Check if $menu is set
if(!isset($block[1]) OR $block[1] == '') {
	// Make our own menu list
	$block[1] = $TEXT['MAIN'];
}

/*-- load css files with jquery --*/
// include jscalendar-setup
$jscal_use_time = true; // whether to use a clock, too
require_once(WB_PATH."/include/jscalendar/wb-setup.php");

// Setup template object
$template = new Template(THEME_PATH.'/templates');
$template->set_file('page', 'pages_sections.htt');
$template->set_block('page', 'main_block', 'main');
$template->set_block('main_block', 'module_block', 'module_list');
$template->set_block('main_block', 'section_block', 'section_list');
$template->set_block('section_block', 'block_block', 'block_list');
$template->set_block('main_block', 'calendar_block', 'calendar_list');

// set first defaults and messages
$template->set_var(array(
				'PAGE_ID' => $results_array['page_id'],
				'PAGE_TITLE' => ($results_array['page_title']),
				'MENU_TITLE' => ($results_array['menu_title']),
				'TEXT_CURRENT_PAGE' => $TEXT['CURRENT_PAGE'],
				'HEADING_MANAGE_SECTIONS' => $HEADING['MANAGE_SECTIONS'],
				'HEADING_MODIFY_PAGE' => $HEADING['MODIFY_PAGE'],
				'TEXT_CHANGE_SETTINGS' => $TEXT['CHANGE_SETTINGS'],
				'TEXT_ADD_SECTION' => $TEXT['ADD_SECTION'],
				'TEXT_ID' => 'ID',
				'TEXT_TYPE' => $TEXT['TYPE'],
				'TEXT_BLOCK' => $TEXT['BLOCK'],
				'TEXT_PUBL_START_DATE' => $TEXT{'PUBL_START_DATE'},
				'TEXT_PUBL_END_DATE' => $TEXT['PUBL_END_DATE'],
				'TEXT_ACTIONS' => $TEXT['ACTIONS'],
				'ADMIN_URL' => ADMIN_URL,
				'WB_URL' => WB_URL,
				'WB_PATH' => WB_PATH,
				'THEME_URL' => THEME_URL
				) 
			);

// Insert variables
$template->set_var(array(
				'VAR_PAGE_ID' => $results_array['page_id'],
				'VAR_PAGE_TITLE' => $results_array['page_title'],
				'SETTINGS_LINK' => ADMIN_URL.'/pages/settings.php?page_id='.$results_array['page_id'],
				'MODIFY_LINK' => ADMIN_URL.'/pages/modify.php?page_id='.$results_array['page_id']
				) 
			);

$query_sections = $database->query("SELECT section_id,module,position,block,publ_start,publ_end FROM ".TABLE_PREFIX."sections WHERE page_id = '$page_id' ORDER BY position ASC");
if($query_sections->numRows() > 0) {
	$num_sections = $query_sections->numRows();
	while($section = $query_sections->fetchRow()) {
		if(!is_numeric(array_search($section['module'], $module_permissions))) {
			// Get the modules real name
			$module_name=$database->get_one("SELECT name FROM ".TABLE_PREFIX."addons WHERE directory='".$section['module']."'");
			$template->set_var(array(
			) );
			if(SECTION_BLOCKS) {
                if(defined('EDIT_ONE_SECTION') and EDIT_ONE_SECTION)
                {
				    $edit_page ='<a name="'.$section['section_id'].'" href="'.ADMIN_URL.'/pages/modify.php?page_id='.$page_id.'&amp;wysiwyg='.$section['section_id'] .'">'.$module_name.'</a>';
                }
                else
                {
				    $edit_page ='<a name="'.$section['section_id'].'" href="'.ADMIN_URL.'/pages/modify.php?page_id='.$page_id.'#wb'.$section['section_id'].'">'.$module_name.'</a>';
                }

				$input_attribute = 'input_normal';
				$template->set_var(array(
						'STYLE_DISPLAY_SECTION_BLOCK' => ' style="visibility:visible;"',
						'NAME_SIZE' => 180,
						'INPUT_ATTRIBUTE' => $input_attribute,
						'VAR_SECTION_ID' => $section['section_id'],
						'VAR_POSITION' => $section['position'],
						'LINK_MODIFY_URL_VAR_MODUL_NAME' => $edit_page,
						'SELECT' => '',
						'SET_NONE_DISPLAY_OPTION' => ''
						) 
					);
				// Add block options to the section_list
				$template->clear_var('block_list');
				foreach($block AS $number => $name) {
					$template->set_var('NAME', htmlentities(strip_tags($name)));
					$template->set_var('VALUE', $number);
					$template->set_var('SIZE', 1);
					if($section['block'] == $number) {
						$template->set_var('SELECTED', ' selected="selected"');
					} else {
						$template->set_var('SELECTED', '');
					}
					$template->parse('block_list', 'block_block', true);
				}
			} else {
				$edit_page ='<a name="'.$section['section_id'].'" href="'.ADMIN_URL.'/pages/modify.php?page_id='.$page_id.'#'.$section['section_id'].'">'.$module_name.'</a>';
				$input_attribute = 'input_small';
				$template->set_var(array(
						'STYLE_DISPLAY_SECTION_BLOCK' => ' style="display:none;"',
						'NAME_SIZE' => 270,
						'INPUT_ATTRIBUTE' => $input_attribute,
						'VAR_SECTION_ID' => $section['section_id'],
						'VAR_POSITION' => $section['position'],
						'LINK_MODIFY_URL_VAR_MODUL_NAME' => $edit_page,
						'NAME' => htmlentities(strip_tags($block[1])),
						'VALUE' => 1,
						'SET_NONE_DISPLAY_OPTION' => ''
						) 
					);
			}
			// Insert icon and images
			$template->set_var(array(
						'CLOCK_16_PNG' => 'clock_16.png',
						'CLOCK_DEL_16_PNG' => 'clock_del_16.png',
						'DELETE_16_PNG' => 'delete_16.png'
						) 
					);
			// set calendar start values
			if($section['publ_start']==0) {
				$template->set_var('VALUE_PUBL_START', '');
			} else {
				$template->set_var('VALUE_PUBL_START', date($jscal_format, $section['publ_start']));
			}
			// set calendar start values
			if($section['publ_end']==0) {
				$template->set_var('VALUE_PUBL_END', '');
			} else {
				$template->set_var('VALUE_PUBL_END', date($jscal_format, $section['publ_end']));
			}
			// Insert icons up and down
			if($section['position'] != 1 ) {
				$template->set_var(
							'VAR_MOVE_UP_URL',
							'<a href="'.ADMIN_URL.'/pages/move_up.php?page_id='.$page_id.'&amp;section_id='.$section['section_id'].'">
							<img src="'.THEME_URL.'/images/up_16.png" alt="{TEXT_MOVE_UP}" />
							</a>' );
			} else {
				$template->set_var(array(
							'VAR_MOVE_UP_URL' => ''
							) 
						);
			}
			if($section['position'] != $num_sections ) {
				$template->set_var(
							'VAR_MOVE_DOWN_URL',
							'<a href="'.ADMIN_URL.'/pages/move_down.php?page_id='.$page_id.'&amp;section_id='.$section['section_id'].'">
							<img src="'.THEME_URL.'/images/down_16.png" alt="{TEXT_MOVE_DOWN}" />
							</a>' );
			} else {
				$template->set_var(array(
							'VAR_MOVE_DOWN_URL' => ''
							) 
						);
			}
		}
			$template->set_var(array(
							'DISPLAY_DEBUG' => ' style="visibility="visible;"',
							'TEXT_SID' => 'SID',
							'DEBUG_COLSPAN_SIZE' => 9
							) 
						);
		if($debug) {
			$template->set_var(array(
							'DISPLAY_DEBUG' => ' style="visibility="visible;"',
							'TEXT_PID' => 'PID',
							'TEXT_SID' => 'SID',
							'POSITION' => $section['position']
							) 
						);
		} else {
			$template->set_var(array(
							'DISPLAY_DEBUG' => ' style="display:none;"',
							'TEXT_PID' => '',
							'POSITION' => ''
							) 
						);
		}
		$template->parse('section_list', 'section_block', true);
	}
}

// now add the calendars -- remember to to set the range to [1970, 2037] if the date is used as timestamp!
// the loop is simply a copy from above.
$query_sections = $database->query("SELECT section_id,module FROM ".TABLE_PREFIX."sections WHERE page_id = '$page_id' ORDER BY position ASC");
if($query_sections->numRows() > 0) {
	$num_sections = $query_sections->numRows();
	while($section = $query_sections->fetchRow()) {
		// Get the modules real name
		$module_name=$database->get_one("SELECT name FROM ".TABLE_PREFIX."addons WHERE directory='".$section['module']."'");
		if(!is_numeric(array_search($section['module'], $module_permissions))) {
			$template->set_var(array(
						'jscal_ifformat' => $jscal_ifformat,
						'jscal_firstday' => $jscal_firstday,
						'jscal_today' => $jscal_today,
						'start_date' => 'start_date'.$section['section_id'],
						'end_date' => 'end_date'.$section['section_id'],
						'trigger_start' => 'trigger_start'.$section['section_id'],
						'trigger_end' => 'trigger_stop'.$section['section_id']
						) 
					);
			if(isset($jscal_use_time) && $jscal_use_time==TRUE) {
				$template->set_var(array(
						'showsTime' => "true",
						'timeFormat' => "24"
						) 
					);
			}  else {
				$template->set_var(array(
						'showsTime' => "false",
						'timeFormat' => "24"
						) 
					);
			}
		}
		$template->parse('calendar_list', 'calendar_block', true);
	}
}

// Work-out if we should show the "Add Section" form
$query_sections = $database->query("SELECT section_id FROM ".TABLE_PREFIX."sections WHERE page_id = '$page_id' AND module = 'menu_link'");
if($query_sections->numRows() == 0) {
	// Modules list
	$result = $database->query("SELECT * FROM ".TABLE_PREFIX."addons WHERE type = 'module' AND function = 'page' AND directory != 'menu_link' order by name");
	if($result->numRows() > 0) {
		while ($module = $result->fetchRow()) {
			// Check if user is allowed to use this module   echo  $module['directory'],'<br />';
			if(!is_numeric(array_search($module['directory'], $module_permissions))) {
				$template->set_var('VALUE', $module['directory']);
				$template->set_var('NAME', $module['name']);
				if($module['directory'] == 'wysiwyg') {
					$template->set_var('SELECTED', ' selected="selected"');
				} else {
					$template->set_var('SELECTED', '');
				}
				$template->parse('module_list', 'module_block', true);
			}
		}
	}
}
// Insert language text and messages
$template->set_var(array(
					'TEXT_MANAGE_SECTIONS' => $HEADING['MANAGE_SECTIONS'],
					'TEXT_ARE_YOU_SURE' => $TEXT['ARE_YOU_SURE'],
					'TEXT_TYPE' => $TEXT['TYPE'],
					'TEXT_ADD' => $TEXT['ADD'],
					'TEXT_SAVE' =>  $TEXT['SAVE'],
					'TEXTLINK_MODIFY_PAGE' => $HEADING['MODIFY_PAGE'],
					'TEXT_CALENDAR' => $TEXT['CALENDAR'],
					'TEXT_DELETE_DATE' => $TEXT['DELETE_DATE'],
					'TEXT_ADD_SECTION' => $TEXT['ADD_SECTION'],
					'TEXT_MOVE_UP' => $TEXT['MOVE_UP'],
					'TEXT_MOVE_DOWN' => $TEXT['MOVE_DOWN']
					) 
				);
$template->parse('main', 'main_block', false);
$template->pparse('output', 'page');

// Print admin footer
$admin->print_footer();

?>