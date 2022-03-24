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
 * @version         $Id: uninstall.php 1280 2010-01-29 02:59:35Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/modules/news/uninstall.php $
 * @lastmodified    $Date: 2010-01-29 03:59:35 +0100 (Fr, 29. Jan 2010) $
 *
 */

// Must include code to stop this file being access directly
if(defined('WB_PATH') == false) { exit("Cannot access this file directly"); }

$database->query("DELETE FROM ".TABLE_PREFIX."search WHERE name = 'module' AND value = 'news'");
$database->query("DELETE FROM ".TABLE_PREFIX."search WHERE extra = 'news'");
$database->query("DROP TABLE ".TABLE_PREFIX."mod_news_posts");
$database->query("DROP TABLE ".TABLE_PREFIX."mod_news_groups");
$database->query("DROP TABLE ".TABLE_PREFIX."mod_news_comments");
$database->query("DROP TABLE ".TABLE_PREFIX."mod_news_settings");

require_once(WB_PATH.'/framework/functions.php');
rm_full_dir(WB_PATH.PAGES_DIRECTORY.'/posts');
rm_full_dir(WB_PATH.MEDIA_DIRECTORY.'/.news');

?>