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
 * @version         $Id: add_post.php 1280 2010-01-29 02:59:35Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/modules/news/add_post.php $
 * @lastmodified    $Date: 2010-01-29 03:59:35 +0100 (Fr, 29. Jan 2010) $
 *
 */

require('../../config.php');

// Include WB admin wrapper script
require(WB_PATH.'/modules/admin.php');

// Include the ordering class
require(WB_PATH.'/framework/class.order.php');
// Get new order
$order = new order(TABLE_PREFIX.'mod_news_posts', 'position', 'post_id', 'section_id');
$position = $order->get_new($section_id);

// Get default commenting
$query_settings = $database->query("SELECT commenting FROM ".TABLE_PREFIX."mod_news_settings WHERE section_id = '$section_id'");
$fetch_settings = $query_settings->fetchRow();
$commenting = $fetch_settings['commenting'];

// Insert new row into database
$database->query("INSERT INTO ".TABLE_PREFIX."mod_news_posts (section_id,page_id,position,commenting,active) VALUES ('$section_id','$page_id','$position','$commenting','1')");

// Get the id
$post_id = $database->get_one("SELECT LAST_INSERT_ID()");

// Say that a new record has been added, then redirect to modify page
if($database->is_error()) {
	$admin->print_error($database->get_error(), WB_URL.'/modules/news/modify_post.php?page_id='.$page_id.'&section_id='.$section_id.'&post_id='.$post_id);
} else {
	$admin->print_success($TEXT['SUCCESS'], WB_URL.'/modules/news/modify_post.php?page_id='.$page_id.'&section_id='.$section_id.'&post_id='.$post_id);
}

// Print admin footer
$admin->print_footer();

?>