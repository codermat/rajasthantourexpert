<?php
require_once("common.php");


$pageinfo=$function->object_to_array($function->get_data_info(GLOBAL_PAGE_TABLE,$_REQUEST['pageid'],'seo_url'));

$pageinfo['short_desc']=html_entity_decode($pageinfo['short_desc']);
$pageinfo['desc']=html_entity_decode($pageinfo['desc']);

$pageinfo['short_desc'] = str_replace("\n", "", $pageinfo['short_desc']);
$pageinfo['short_desc'] = str_replace("\r", "", $pageinfo['short_desc']);
$pageinfo['desc'] = str_replace("\n", "", $pageinfo['desc']);
$pageinfo['desc'] = str_replace("\r", "", $pageinfo['desc']);
if(!is_array($pageinfo))
{
	$pageinfo=array();
}
if($pageinfo['pagetype']=='faq')
{
	$faqs=$function->object_to_array($function->get_data_list(GLOBAL_FAQ_TABLE,'id,question,answer','t','status'));
	
	for($i=0;$i<count($faqs);$i++)
	{
	
	}
	$smarty->assign("faqs", $faqs);
}

$smarty->assign("datainfo", $pageinfo);

$is_home='false';
$smarty->assign("is_home", $is_home);

///////// Code Start to Get Featured Testimonials info ///////////////
$testimonialslist=$function->object_to_array($function->get_data_list(GLOBAL_TESTIMONIALS_TABLE,"*",'t','is_featured',$orderbyfield='rand(), author',$order='asc',1,3));

$smarty->assign("testimonialslist", $testimonialslist);

if(isset($_SESSION['success_message']))
{
$smarty->assign("success_message", $_SESSION['success_message']);
unset($_SESSION['success_message']);
}
////////// End of Code to Get Featured Testimonials /////////////
if($pageinfo['id']!='')
{
	if($pageinfo['pagetype']=='contact-us')
	{
	
		$bodyclass='not-front page-locations';
		$smarty->assign("bodyclass", $bodyclass);
		$smarty->display('page-contact-us-template.tpl');
	}else
	{
		$bodyclass='not-front page-about';
		$smarty->assign("bodyclass", $bodyclass);
		$smarty->display('page.tpl');
	}
}else
{
	require_once("404.php");
}

?>