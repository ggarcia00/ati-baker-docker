<?php
// Must include code to stop this file being accessed directly
if(!defined('WB_PATH')) {
	require_once(dirname(dirname(__FILE__)).'/framework/globalExceptionHandler.php');
	throw new IllegalFileException();
}
/* -------------------------------------------------------- */

if(defined('WB_URL'))
{

	$separador = 'INSERT INTO `'.TABLE_PREFIX.'addons` ( '
		. ' `addon_id`, `type`, `directory`, `name`, `description`, `function`, `version`, `platform`, `author`, `license`) ' 
		. ' VALUES (NULL, module, separador_menu, Separador de menu, Separar menus, page, 2.8, UEL | ATI, \'\', \'\')';
	$database->query($separador);
?>
