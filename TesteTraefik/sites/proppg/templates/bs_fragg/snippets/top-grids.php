<?php
if(!defined('WB_URL')) { header('Location: ../../../index.php'); exit(0); }

$theq = "SELECT * FROM `".TABLE_PREFIX."pages` WHERE page_id IN (".$top_grids_page_ids.") ORDER BY FIND_IN_SET(page_id, '".$top_grids_page_ids."');" ;
$query_pages = $database->query($theq);

if($query_pages->numRows() < 1) { 
	//do nothing 
} else {
	$i = 0;
	echo '<!-- top-grids --><div class="top-grids text-center"><div class="container">';
	while($page = $query_pages->fetchRow()) {
		$i++;
		$ahref= '<a href="'.WB_URL.PAGES_DIRECTORY.$page['link'].PAGE_EXTENSION.'">';
		//Start output:
		$l = '
<div class="col-md-3"><div class="top-grid">
		'.$ahref.'<img class="img-responsive" src="'.TEMPLATE_DIR.'/img/top-icon'.$i.'.png" alt="'.$page['page_title'].'"></a>
		<h3>'.$ahref.$page['menu_title'].'</a></h3> 
		 <p>'.$page['description'].'</p>';
		//$l .= '<a class="caption-btn" href="'.WB_URL.PAGES_DIRECTORY.$page['link'].PAGE_EXTENSION.'">'.$TEXT['READ_MORE'].'</a>';
	$l .= '</div></div>';
	echo $l;
		} //end while
		echo '<div class="clearfix"> </div></div></div><!-- end top-grids -->';
} 

?>		
			
				
