<?php
/**
 *
 * @category        modules
 * @package         wrapper
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version      	$Id: install.php 1284 2010-02-01 05:27:59Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/modules/wrapper/install.php $
 * @lastmodified    $Date: 2010-02-01 06:27:59 +0100 (Mo, 01. Feb 2010) $
 *
 */

if(defined('WB_URL')) {
	
	// Create table
	// $database->query("DROP TABLE IF EXISTS `".TABLE_PREFIX."mod_wrapper`");
	$mod_wrapper = 'CREATE TABLE IF NOT EXISTS `'.TABLE_PREFIX.'mod_wrapper` ('
		. ' `section_id` INT NOT NULL DEFAULT \'0\','
		. ' `page_id` INT NOT NULL DEFAULT \'0\','
		. ' `url` TEXT NOT NULL,'
		. ' `height` INT NOT NULL DEFAULT \'0\','
		. ' PRIMARY KEY ( `section_id` ) '
		. ' )';
	$database->query($mod_wrapper);
}

?>