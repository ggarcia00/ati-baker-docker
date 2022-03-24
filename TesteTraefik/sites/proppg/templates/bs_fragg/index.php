<?php
if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}	

//Lets fetch some content for the slider from given page_ids:

$slider_page_ids = '53,54,17';
$slider_image_base = TEMPLATE_DIR.'/img/slide'; // added: number + .jpg

$top_grids_page_ids = '54,53,17,56';

$topics_picture_directory = WB_URL.'/media/topics-pictures';	
	
	

?><!DOCTYPE html>
<html>
<head>
<?php
if(function_exists('simplepagehead')) {
	simplepagehead(); 
} else { ?>
<title><?php page_title(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php if(defined('DEFAULT_CHARSET')) { echo DEFAULT_CHARSET; } else { echo 'utf-8'; }?>" />
<meta name="description" content="<?php page_description(); ?>" />
<meta name="keywords" content="<?php page_keywords(); ?>" />
<?php }
if(function_exists('register_frontend_modfiles')) {
	register_frontend_modfiles('css');
	register_frontend_modfiles('jquery');
	register_frontend_modfiles('js');
} ?>

<link href="<?php echo TEMPLATE_DIR; ?>/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?php echo TEMPLATE_DIR; ?>/editor.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo TEMPLATE_DIR; ?>/template.css" rel="stylesheet" type="text/css" media="screen" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
</head>

<?php 
	ob_start();		
	page_content(1);
	$page_content_1 = ''.ob_get_contents();
	ob_end_clean();
	
	if(defined('TOPIC_BLOCK2') AND TOPIC_BLOCK2 != '') { 
		 	$page_content_2 = TOPIC_BLOCK2; 
	} else {
		ob_start();
		page_content(2);
		$page_content_2 = ''.ob_get_contents();
		ob_end_clean();
	}
	
	if($page_content_2 == '') {$page_content_2 = '<img class="img-responsive" src="'.TEMPLATE_DIR.'/img/about.jpg" title="'.WEBSITE_TITLE.'" alt="" />';}
	
	
	ob_start(); 
	//show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL, '<li class="[class]"><a href="[url]">[menu_title]</a>', "</li>", '<ul>', '</ul>', true, '<ul class="dropdown-menu" role="menu">');
	show_menu2(1, SM2_ROOT, SM2_START, SM2_TRIM, '<li class="[class]"><a href="[url]">[menu_title]</a>', "</li>", '<ul>', '</ul>', true, '<ul>');
	$topnav = ob_get_contents();
	$topnav = str_replace('menu-current','active',$topnav);
	ob_end_clean();
	
?>
<body>

<!-- header -->
<div class="header">
	<div class="container">
		<!-- logo -->
		<div class="logo">
			<a href="<?php echo WB_URL; ?>"><img src="<?php echo TEMPLATE_DIR; ?>/img/logo.png" title="<?php echo WEBSITE_TITLE; ?>" alt="" /></a>
		</div>
		<!-- logo -->
		<!-- top-nav -->
		<div class="top-nav">
			<span class="menu"> </span>						
			<?php echo $topnav; ?>
		</div>
		<!-- top-nav -->
		<!-- script-for-nav -->
		<script>
			$(document).ready(function(){
				$("span.menu").click(function(){
					$(".top-nav ul").slideToggle(300);
				});
			});
		</script>
		<!-- script-for-nav -->
		<div class="clearfix"> </div>
	</div>
</div><!-- end header -->



		
		
<?php  

if (!isset($page_id) OR $page_id == 4) { //extra for WB.at
	include('snippets/bigslider.php');
	include('snippets/top-grids.php');
	include('snippets/2col-content.php');
} else {
	include('snippets/2col-content.php');
}

include('snippets/bottomgrid_topics.php'); 
include('snippets/footer-grids.php'); 
include('snippets/footer-claim.php'); 

?>		
		
		
		
		
		<div class="footer">
			<div class="container">
				<?php page_footer(); 
				if ($page_id % 5 == 1) {echo '<br/><span style="font-size:10px;">Based on design by <a href="http://www.webeye.at" target="_blank">Grafikb&uuml;ro Wien</a></span>'; } 
				?>
			</div>
		</div>
		<!-- /footer -->
	</body>
</html>