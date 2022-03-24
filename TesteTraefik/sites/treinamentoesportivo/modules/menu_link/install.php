<?php
/**
 *
 * @category        modules
 * @package         menu_link
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version      	$Id: install.php 1284 2010-02-01 05:27:59Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/modules/menu_link/install.php $
 * @lastmodified    $Date: 2010-02-01 06:27:59 +0100 (Mo, 01. Feb 2010) $
 *
 */

// prevent this file from being accessed directly
if(defined('WB_PATH') == false) {
	exit("Cannot access this file directly"); 
}

$table = TABLE_PREFIX ."mod_menu_link";
// $database->query("DROP TABLE IF EXISTS `$table`");

$database->query("
	CREATE TABLE IF NOT EXISTS `$table` (
		`section_id` INT(11) NOT NULL DEFAULT '0',
		`page_id` INT(11) NOT NULL DEFAULT '0',
		`target_page_id` INT(11) NOT NULL DEFAULT '0',
		`redirect_type` INT NOT NULL DEFAULT '302',
		`anchor` VARCHAR(255) NOT NULL DEFAULT '0' ,
		`extern` VARCHAR(255) NOT NULL DEFAULT '' ,
		PRIMARY KEY (`section_id`)
	)
");

?>
