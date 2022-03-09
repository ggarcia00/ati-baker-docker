//:Load the view.php from any other section-module
//:Use [[SectionPicker?sid=123]]
global $database, $wb, $TEXT, $DGTEXT;
$content = '';
if( intval($sid)>0 ) {
	$sql  = 'SELECT `page_id`, `section_id`, `module` FROM `'.TABLE_PREFIX.'sections` ';
	$sql .= 'WHERE `section_id` = '.(int)$sid;
	$sql .= '';
	if($query_sec = $database->query($sql))
	{
		$section = $query_sec->fetchRow();
		$section_id = $section['section_id'];
		$module = $section['module'];
		$_sFrontendCss = '/modules/'.$module.'/frontend.css';
		if(is_readable(WB_PATH.$_sFrontendCss)) {
			$_sSearch = preg_quote(WB_URL.'/modules/'.$module.'/frontend.css', '/');
			if(preg_match('/<link[^>]*?href\s*=\s*\"'.$_sSearch.'\".*?\/>/si', $wb_page_data)) {
				$_sFrontendCss = '';
			}else {
				$_sFrontendCss = '<link href="'.WB_URL.$_sFrontendCss.'" rel="stylesheet" type="text/css" media="screen" />';
			}
		} else { $_sFrontendCss = ''; }
		ob_start();
		require(WB_PATH.'/modules/'.$module.'/view.php');
		$content = $_sFrontendCss.ob_get_clean();
	}
}
return $content;