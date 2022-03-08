<?php
require_once('config.php');
require_once('framework/functions.php');
require_once('framework/class.login.php');

	$insert_addons = "INSERT INTO `".TABLE_PREFIX."addons` "
	." (type,directory,name,function,version,platform,description) VALUES "
	." ('template','uel-2021','UEL 2021','','2.13.0','UEL | ATI','Template versão 2.13.0') "
	." ";
	$database->query($insert_addons);

	$update_settings = "UPDATE `".TABLE_PREFIX."settings` SET value='uel-2021' WHERE name='default_template'";
	$database->query($update_settings);


require_once('modules/news/install.php');
