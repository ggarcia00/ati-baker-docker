<?php
/**
 *
 * @category        backend
 * @package         modules
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: admin.php 1281 2010-01-30 04:57:58Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/modules/admin.php $
 * @lastmodified    $Date: 2010-01-30 05:57:58 +0100 (Sa, 30. Jan 2010) $
 *
*/

// Stop this file being access directly
if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}

// Get page id
if(isset($_GET['page_id']) AND is_numeric($_GET['page_id'])) {
	$page_id = $_GET['page_id'];
} elseif(isset($_POST['page_id']) AND is_numeric($_POST['page_id'])) {
	$page_id = $_POST['page_id'];
} else {
	header("Location: index.php");
	exit(0);
}

// Get section id if there is one
if(isset($_GET['section_id']) AND is_numeric($_GET['section_id'])) {
	$section_id = $_GET['section_id'];
} elseif(isset($_POST['section_id']) AND is_numeric($_POST['section_id'])) {
	$section_id = $_POST['section_id'];
} else {
	// Check if we should redirect the user if there is no section id
	if(!isset($section_required)) {
		$section_id = 0;
	} else {
		header("Location: $section_required");
		exit(0);
	}
}

// Create js back link
$js_back = 'javascript: history.go(-1);';

// Create new admin object
require(WB_PATH.'/framework/class.admin.php');
$admin = new admin('Pages', 'pages_modify');

// Get perms
$database = new database();
$results = $database->query("SELECT admin_groups,admin_users FROM ".TABLE_PREFIX."pages WHERE page_id = '$page_id'");
$results_array = $results->fetchRow();
$old_admin_groups = explode(',', str_replace('_', '', $results_array['admin_groups']));
$old_admin_users = explode(',', str_replace('_', '', $results_array['admin_users']));

$in_group = FALSE;
foreach($admin->get_groups_id() as $cur_gid){
    if (in_array($cur_gid, $old_admin_groups)) {
        $in_group = TRUE;
    }
}
if((!$in_group) AND !is_numeric(array_search($admin->get_user_id(), $old_admin_users))) {
	echo $admin->get_group_id().$admin->get_user_id();
	print_r ($old_admin_groups);
	$admin->print_error($MESSAGE['PAGES']['INSUFFICIENT_PERMISSIONS']);
}

// Workout if the developer wants to show the info banner
if(isset($print_info_banner) AND $print_info_banner == true) {
	
// Get page details
$database = new database();
$query = "SELECT page_id,page_title,modified_by,modified_when FROM ".TABLE_PREFIX."pages WHERE page_id = '$page_id'";
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

// Get display name of person who last modified the page
$user=$admin->get_user_details($results_array['modified_by']);

// Convert the unix ts for modified_when to human a readable form
if($results_array['modified_when'] != 0) {
	$modified_ts = gmdate(TIME_FORMAT.', '.DATE_FORMAT, $results_array['modified_when']+TIMEZONE);
} else {
	$modified_ts = 'Unknown';
}

// Include page info script
$template = new Template(THEME_PATH.'/templates');
$template->set_file('page', 'pages_modify.htt');
$template->set_block('page', 'main_block', 'main');
$template->set_var(array(
								'PAGE_ID' => $results_array['page_id'],
								'PAGE_TITLE' => ($results_array['page_title']),
								'MODIFIED_BY' => $user['display_name'],
								'MODIFIED_BY_USERNAME' => $user['username'],
								'MODIFIED_WHEN' => $modified_ts,
								'ADMIN_URL' => ADMIN_URL
								)
						);
if($modified_ts == 'Unknown') {
	$template->set_var('DISPLAY_MODIFIED', 'hide');
} else {
	$template->set_var('DISPLAY_MODIFIED', '');
}

// Work-out if we should show the "manage sections" link
$query_sections = $database->query("SELECT section_id FROM ".TABLE_PREFIX."sections WHERE page_id = '$page_id' AND module = 'menu_link'");
if($query_sections->numRows() > 0) {
	$template->set_var('DISPLAY_MANAGE_SECTIONS', 'none');
} elseif(MANAGE_SECTIONS == 'enabled') {
	$template->set_var('TEXT_MANAGE_SECTIONS', $HEADING['MANAGE_SECTIONS']);
} else {
	$template->set_var('DISPLAY_MANAGE_SECTIONS', 'none');
}

// Insert language TEXT
$template->set_var(array(
								'TEXT_CURRENT_PAGE' => $TEXT['CURRENT_PAGE'],
								'TEXT_CHANGE' => $TEXT['CHANGE'],
								'LAST_MODIFIED' => $MESSAGE['PAGES']['LAST_MODIFIED'],
								'TEXT_CHANGE_SETTINGS' => $TEXT['CHANGE_SETTINGS'],
								'HEADING_MODIFY_PAGE' => $HEADING['MODIFY_PAGE']
								)
						);

// Parse and print header template
$template->parse('main', 'main_block', false);
$template->pparse('output', 'page');

}

// Work-out if the developer wants us to update the timestamp for when the page was last modified
if(isset($update_when_modified) AND $update_when_modified == true) {
	$database->query("UPDATE ".TABLE_PREFIX."pages SET modified_when = '".time()."', modified_by = '".$admin->get_user_id()."' WHERE page_id = '$page_id'");
}

?>