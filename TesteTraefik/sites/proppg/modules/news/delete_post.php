<?php
/**
 *
 * @category        modules
 * @package         news
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: delete_post.php 1280 2010-01-29 02:59:35Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/modules/news/delete_post.php $
 * @lastmodified    $Date: 2010-01-29 03:59:35 +0100 (Fr, 29. Jan 2010) $
 *
 */

require('../../config.php');

// Get id
if(!isset($_GET['post_id']) OR !is_numeric($_GET['post_id'])) {
	header("Location: ".ADMIN_URL."/pages/index.php");
	exit(0);
} else {
	$post_id = $_GET['post_id'];
}

// Include WB admin wrapper script
$update_when_modified = true; // Tells script to update when this page was last updated
require(WB_PATH.'/modules/admin.php');

// Get post details
$query_details = $database->query("SELECT * FROM ".TABLE_PREFIX."mod_news_posts WHERE post_id = '$post_id'");
if($query_details->numRows() > 0) {
	$get_details = $query_details->fetchRow();
} else {
	$admin->print_error($TEXT['NOT_FOUND'], ADMIN_URL.'/pages/modify.php?page_id='.$page_id);
}

// Unlink post access file
if(is_writable(WB_PATH.PAGES_DIRECTORY.$get_details['link'].PAGE_EXTENSION)) {
	unlink(WB_PATH.PAGES_DIRECTORY.$get_details['link'].PAGE_EXTENSION);
}

// Delete post
$database->query("DELETE FROM ".TABLE_PREFIX."mod_news_posts WHERE post_id = '$post_id' LIMIT 1");
$database->query("DELETE FROM ".TABLE_PREFIX."mod_news_comments WHERE post_id = '$post_id'");

// Clean up ordering
require(WB_PATH.'/framework/class.order.php');
$order = new order(TABLE_PREFIX.'mod_news_posts', 'position', 'post_id', 'section_id');
$order->clean($section_id); 

// Check if there is a db error, otherwise say successful
if($database->is_error()) {
	$admin->print_error($database->get_error(), WB_URL.'/modules/news/modify_post.php?page_id='.$page_id.'&post_id='.$post_id);
} else {
	$admin->print_success($TEXT['SUCCESS'], ADMIN_URL.'/pages/modify.php?page_id='.$page_id);
}

// Print admin footer
$admin->print_footer();

?>