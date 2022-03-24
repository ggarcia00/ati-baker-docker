<?php
if(!defined('WB_URL')) { header('Location: ../../../index.php'); exit(0); }
?>
<!-- bottom-grids -->
<?php
//Check, if Topics exists:
$mod_dir = 'topics'; //could be renamed, set the name here. usually its 'topics'


$p = WB_PATH.'/modules/'.$mod_dir.'/module_settings.php';
if(file_exists($p)) {
//OK, topics is out there
include($p);

$limit_sql = ' LIMIT 3';
$theq = "SELECT topic_id, published_when, content_short, link, title, short_description, hascontent, active, picture FROM ".TABLE_PREFIX."mod_".$mod_dir." WHERE active > '3' ORDER BY published_when DESC ".$limit_sql;
$query_topics = $database->query($theq);

// Loop through existing topics
if($query_topics->numRows() > 0) {
	$num_topics = $query_topics->numRows();
	echo '<div class="bottom-grids"><h2>Latest News</h2>';
	
	$i=0;
	while($topic = $query_topics->fetchRow()) {
		$i++;
		$row = $i % 2;
		$t_id = $topic['topic_id'];		
		$active = $topic['active'];
		$link = WB_URL.$topics_directory.$topic['link'].PAGE_EXTENSION;
		$picture = '<img src="'.$topics_picture_directory.'/'.$topic['picture'].'" title="'.$topic['title'].'" alt="" />';
		
		$l = '<div class="bottom-grid bottom-grid'.$row.'">
<div class="container">
<div class="col-md-3 bottom-grid-left">';
if ($topic['hascontent'] > 0) { $l .= '<a href="'.$link.'">'.$picture.'</a>';} else {$l .= $picture;}
$l .= '</div>
<div class="col-md-9 bottom-grid-right">'.$topic['content_short'];
if ($topic['hascontent'] > 0) {$l .= '<a class="news-btn" href="'.$link.'">'.$TEXT['READ_MORE'].'</a>';}

$l .= '</div>
<div class="clearfix"> </div>
</div>
</div>';
echo $l;

	} //end while;
	echo '<div class="clearfix"> </div>
<a class="load-news" href="#">More News</a>
</div>
</div>
<!-- bottom-grids -->';
} //end if($query_topics->numRows() > 0) {

} else { //end if(file_exists($p)) {
	include('bottomgrid_html.php');
}
?>