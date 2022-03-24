<?php

// $Id: backup_droplets.php 991 2009-06-15 15:55:20Z Ruebenwurzel $

/*
*	@version	1.0
*	@author		Ruud Eisinga (Ruud) John (PCWacht)
*	@date		June 2009
*
*/

// tool_edit.php
require_once('../../config.php');
require_once(WB_PATH.'/framework/class.admin.php');
require_once(WB_PATH.'/framework/functions.php');
// create admin object depending on platform (admin tools were moved out of settings with WB 2.7)
$admin = new admin('admintools', 'admintools');
$admintool_link = ADMIN_URL .'/admintools/index.php';
$module_edit_link = ADMIN_URL .'/admintools/tool.php?tool=droplets';
$template_edit_link = ADMIN_URL .'/admintools/tool.php?tool=templateedit';


?>
<h4 style="margin: 0; border-bottom: 1px solid #DDD; padding-bottom: 5px;">
	<a href="<?php echo $admintool_link;?>"><?php echo $HEADING['ADMINISTRATION_TOOLS']; ?></a>
	->
	<a href="<?php echo $module_edit_link;?>">Droplets</a>
</h4>
<?php

$temp_dir = WB_PATH.'/temp/droplets/';
$temp_file = '/modules/droplets/backup-droplets.zip';
// make the temporary working directory
mkdir($temp_dir);
$query_droplets = $database->query("SELECT * FROM ".TABLE_PREFIX."mod_droplets ORDER BY modified_when DESC");
while($droplet = $query_droplets->fetchRow()) {
	echo 'Saving: '.$droplet["name"].'.php<br />';
	$sFile = $temp_dir.$droplet["name"].'.php';
	$fh = fopen($sFile, 'w') ;
	fwrite($fh, '//:'.$droplet['description']."\n");
	fwrite($fh, '//:'.str_replace("\n"," ",$droplet['comments'])."\n");
	fwrite($fh, $droplet['code']);
	fclose($fh);
}
echo '<br />Create archive: backup-droplets.zip<br />';

require_once(WB_PATH.'/include/pclzip/pclzip.lib.php');
$archive = new PclZip(WB_PATH.$temp_file);
$file_list = $archive->create($temp_dir, PCLZIP_OPT_REMOVE_ALL_PATH);
if ($file_list == 0){
	echo "Packaging error: '.$archive->errorInfo(true).'";
	die("Error : ".$archive->errorInfo(true));
}
else {
	echo '<br /><br />Backup created - <a href="'.WB_URL.$temp_file.'">Download</a>';
}
delete_directory ( $temp_dir );
$admin->print_footer();


function delete_directory($dirname) {
    if (is_dir($dirname))
        $dir_handle = opendir($dirname);
    if (!$dir_handle)
        return false;
    while($file = readdir($dir_handle)) {
        if ($file != "." && $file != "..") {
            if (!is_dir($dirname."/".$file))
                unlink($dirname."/".$file);
            else
                delete_directory($dirname.'/'.$file);          
        }
    }
    closedir($dir_handle);
    rmdir($dirname);
    return true;
}
?>