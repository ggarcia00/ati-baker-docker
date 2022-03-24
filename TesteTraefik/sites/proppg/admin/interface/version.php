<?php
/*
 * 						About WebsiteBaker
 *
 * Website Baker is a PHP-based Content Management System (CMS)
 * designed with one goal in mind: to enable its users to produce websites
 * with ease.
 *
 * 						LICENSE INFORMATION
 *
 * WebsiteBaker is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * WebsiteBaker is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 * 				WebsiteBaker Extra Information
 *
 * This file is where the WB release version is stored.
 *
 */
/**
 *
 * @category     	admin
 * @package      	interface
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @revision     	$Revision: 1287 $
 * @version      	$Id: version.php 1287 2010-02-08 23:18:49Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/admin/interface/version.php $
 * @lastmodified    $Date: 2010-02-09 00:18:49 +0100 (Di, 09. Feb 2010) $
 * 
 */

if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}

// check if defined to avoid errors during installation (redirect to admin panel fails if PHP error/warnings are enabled)
if(!defined('VERSION')) define('VERSION', '2.8.1');
if(!defined('REVISION')) define('REVISION', '1287');

?>