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
 * @version         $Id: add.php 1280 2010-01-29 02:59:35Z Luisehahne $
 * @filesource		$HeadURL: http://svn.websitebaker2.org/branches/2.8.x/wb/modules/news/add.php $
 * @lastmodified    $Date: 2010-01-29 03:59:35 +0100 (Fr, 29. Jan 2010) $
 *
 */

// Must include code to stop this file being access directly
if(defined('WB_PATH') == false) { exit("Cannot access this file directly"); }

$header = '<table cellpadding=\"0\" cellspacing=\"0\" class=\"loop-header\">'."\n";
$post_loop = '<tr class=\"post-top\">
<td class=\"post-title\"><a href=\"[LINK]\">[TITLE]</a></td>
<td class=\"post-date\">[PUBLISHED_DATE], [PUBLISHED_TIME]</td>
</tr>
<tr>
<td class=\"post-short\" colspan=\"2\">
[SHORT]
<span style=\"visibility:[SHOW_READ_MORE];\"><a href=\"[LINK]\">[TEXT_READ_MORE]</a></span>
</td>
</tr>';
$footer = '</table>
<table cellpadding="0" cellspacing="0" class="page-header" style="display: [DISPLAY_PREVIOUS_NEXT_LINKS]">
<tr>
<td class="page-left">[PREVIOUS_PAGE_LINK]</td>
<td class="page-center">[OF]</td>
<td class="page-right">[NEXT_PAGE_LINK]</td>
</tr>
</table>';
$post_header = addslashes('<table cellpadding="0" cellspacing="0" class="post-header">
<tr>
<td><h1>[TITLE]</h1></td>
<td rowspan="3" style="display: [DISPLAY_IMAGE]">[GROUP_IMAGE]</td>
</tr>
<tr>
<td class="public-info"><b>[TEXT_POSTED_BY] [DISPLAY_NAME] ([USERNAME]) [TEXT_ON] [PUBLISHED_DATE]</b></td>
</tr>
<tr style="display: [DISPLAY_GROUP]">
<td class="group-page"><a href="[BACK]">[PAGE_TITLE]</a> &gt;&gt; <a href="[BACK]?g=[GROUP_ID]">[GROUP_TITLE]</a></td>
</tr>
</table>');
$post_footer = '<p>[TEXT_LAST_CHANGED]: [MODI_DATE] [TEXT_AT] [MODI_TIME]</p>
<a href=\"[BACK]\">[TEXT_BACK]</a>';
$comments_header = addslashes('<br /><br />
<h2>[TEXT_COMMENTS]</h2>
<table cellpadding="2" cellspacing="0" class="comment-header">');
$comments_loop = addslashes('<tr>
<td class="comment_title">[TITLE]</td>
<td class="comment_info">[TEXT_BY] [DISPLAY_NAME] [TEXT_ON] [DATE] [TEXT_AT] [TIME]</td>
</tr>
<tr>
<td colspan="2" class="comment-text">[COMMENT]</td>
</tr>');
$comments_footer = '</table>
<br /><a href=\"[ADD_COMMENT_URL]\">[TEXT_ADD_COMMENT]</a>';
$comments_page = '<h1>[TEXT_COMMENT]</h1>
<h2>[POST_TITLE]</h2>
<br />';
$commenting = 'none';
$use_captcha = true;

$database->query("INSERT INTO ".TABLE_PREFIX."mod_news_settings (section_id,page_id,header,post_loop,footer,post_header,post_footer,comments_header,comments_loop,comments_footer,comments_page,commenting,use_captcha) VALUES ('$section_id','$page_id','$header','$post_loop','$footer','$post_header','$post_footer','$comments_header','$comments_loop','$comments_footer','$comments_page','$commenting','$use_captcha')");

?>