<?php
require_once("common.php");



if(!is_array($pageinfo))
{
	$pageinfo=array();
}
$pageinfo['title']="Testimonials";

$smarty->assign("datainfo", $pageinfo);

$is_home='false';
$smarty->assign("is_home", $is_home);

///////// Code Start to Get Featured Testimonials info ///////////////
$testimonialslist=$function->object_to_array($function->get_data_list(GLOBAL_TESTIMONIALS_TABLE,"*",'t','status',$orderbyfield='rand(), author',$order='asc',1,50));

$smarty->assign("testimonialslist", $testimonialslist);

////////// End of Code to Get Featured Testimonials /////////////
$bodyclass='not-front page-about';
		$smarty->assign("bodyclass", $bodyclass);
		$smarty->display('testimonials.tpl');

?>