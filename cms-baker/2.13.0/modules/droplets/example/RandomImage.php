//:Get a random image from a folder in the MEDIA folder.
//:Commandline to use: [[RandomImage?dir=subfolder_in_mediafolder]]
$dir = ((isset($dir) && ($dir != ''))?$dir:'');
$folder = opendir(WB_PATH.MEDIA_DIRECTORY.'/'.$dir.'/.');
$names = array();
while ($file = readdir($folder)) {
    $ext = strtolower(substr($file, -4));
    if ($ext == ".jpg" || $ext == ".gif" || $ext == ".png") {
        $names[count($names)] = $file;
    }
}
closedir($folder);
shuffle($names);
$image = $names[0];
$name = substr($image, 0, -4);
return '<img src="'.WB_URL.MEDIA_DIRECTORY.'/'.$dir.'/'.$image.'" alt="'.$name.'" width="95%" />';
