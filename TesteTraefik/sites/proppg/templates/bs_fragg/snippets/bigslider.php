<?php
if(!defined('WB_URL')) { header('Location: ../../../index.php'); exit(0); }
?>
		
<!-- banner -->
<div class="banner">
<!-- slider -->
<!--  img-slider  -->
<div class="img-slider">
		<!-- start-slider-script -->
	<script src="<?php echo TEMPLATE_DIR; ?>/js/responsiveslides.min.js"></script>
	 <script>					    
		$(function () {
		  // Slideshow 4
		  $("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 600,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
	
		});
	  </script>
	<!-- End-slider-script -->
<!-- Slideshow 4 -->
<div  id="top" class="callbacks_container">
<ul class="rslides" id="slider4">
<?php 
$theq = "SELECT * FROM `".TABLE_PREFIX."pages` WHERE page_id IN (".$slider_page_ids.") ORDER BY FIND_IN_SET(page_id, '".$slider_page_ids."');" ;
$query_pages = $database->query($theq);

if($query_pages->numRows() < 1) { 
	//do nothing 
} else {
	$i = 0;
	while($page = $query_pages->fetchRow()) {
		$i++;
		$page_id = $page['page_id'];
		$nr = $i; //Use $page_id OR $i for picture numbers. $i (1, 2, 3...)  is easier to handle, $page_id is mor specific.
	
	//Start output:
		$l = '
<li><img class="img-responsive" src="'.$slider_image_base.$nr.'.jpg" alt="'.$page['menu_title'].'">
<div class="slider-caption"><h1>'.$page['page_title'].'</h1><p>'.$page['description'].'</p>';
$l .= '<a class="caption-btn" href="'.WB_URL.PAGES_DIRECTORY.$page['link'].PAGE_EXTENSION.'">'.$TEXT['READ_MORE'].'</a>';
$l .= '</div></li>';
echo $l;
		}
}

?>
</ul> </div>
<div class="clearfix"> </div>
</div><!-- slider -->
</div><!-- end banner -->