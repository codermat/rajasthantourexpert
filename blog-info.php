<?php
require_once("common.php");

$activepage='blog';
$smarty->assign("activepage", $activepage);

$bloginfo=$function->object_to_array($function->get_data_info(GLOBAL_BLOG_TABLE,$_REQUEST['postid'],'seo_url'));

$bloginfo['short_desc']=html_entity_decode($bloginfo['short_desc']);
$bloginfo['desc']=html_entity_decode($bloginfo['desc']);

$bloginfo['short_desc'] = str_replace("\n", "", $bloginfo['short_desc']);
$bloginfo['short_desc'] = str_replace("\r", "", $bloginfo['short_desc']);
$bloginfo['desc'] = str_replace("\n", "", $bloginfo['desc']);
$bloginfo['desc'] = str_replace("\r", "", $bloginfo['desc']);
if(!is_array($bloginfo))
{
	$bloginfo=array();
}



$bodyclass='not-front page-about';
$smarty->assign("bodyclass", $bodyclass);

$smarty->assign("datainfo", $bloginfo);
$smarty->display('post-details.tpl');


?>