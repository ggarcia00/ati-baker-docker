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
 * @version         $Id: upgrade.php 1281 2010-01-30 04:57:58Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/modules/news/upgrade.php $
 * @lastmodified    $Date: 2010-01-30 05:57:58 +0100 (Sa, 30. Jan 2010) $
 *
 */

if(defined('WB_URL')) {

    function create_new_post($filename, $filetime=NULL, $content )
    {
    global $page_id, $section_id, $post_id;
	// The depth of the page directory in the directory hierarchy
	// '/pages' is at depth 1
	$pages_dir_depth = count(explode('/',PAGES_DIRECTORY))-1;
	// Work-out how many ../'s we need to get to the index page
	$index_location = '../';
	for($i = 0; $i < $pages_dir_depth; $i++)
    {
		$index_location .= '../';
	}

	// Write to the filename
	$content .='
define("POST_SECTION", $section_id);
define("POST_ID", $post_id);
require("'.$index_location.'config.php");
require(WB_PATH."/index.php");
?>';
    	if($handle = fopen($filename, 'w+'))
        {
        	fwrite($handle, $content);
        	fclose($handle);
            if($filetime)
            {
                touch($filename, $filetime);
            }
        	change_mode($filename);
        }
    }

    // read files from /pages/posts/
    if( !function_exists('scandir') )
    {
        function scandir($directory, $sorting_order = 0)
        {
            $dh  = opendir($directory);
            while( false !== ($filename = readdir($dh)) )
            {
                $files[] = $filename;
            }
            if( $sorting_order == 0 )
            {
                sort($files);
            } else
            {
                rsort($files);
            }
            return($files);
        }
    }

    $target_dir = WB_PATH . PAGES_DIRECTORY.'/posts/';
	$files = scandir($target_dir);
	natcasesort($files);

		// All files in /pages/posts/
		foreach( $files as $file )
        {
            if( file_exists($target_dir.$file)
                AND ($file != '.')
                    AND ($file != '..')
                        AND ($file != 'index.php') )
            {
                clearstatcache();
                $timestamp = filemtime ( $target_dir.$file );
                $lines = file($target_dir.$file);
                $content = '';
                // read lines until first define
                foreach ($lines as $line_num => $line) {
                    if(strstr($line,'define'))
                    {
                      break;
                    }
                    $content .= $line;
                }

                create_new_post($target_dir.$file, $timestamp, $content);
            }

        }
// Print admin footer
$admin->print_footer();
}
?>