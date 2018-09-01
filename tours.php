<?php
require_once("common.php");


$tourinfo=$function->object_to_array($function->get_data_info(GLOBAL_TOURS_TABLE,$_REQUEST['tourid'],'seo_url'));

$tourinfo['short_desc']=html_entity_decode($tourinfo['short_desc']);
$tourinfo['desc']=html_entity_decode($tourinfo['desc']);

$tourinfo['short_desc'] = str_replace("\n", "", $tourinfo['short_desc']);
$tourinfo['short_desc'] = str_replace("\r", "", $tourinfo['short_desc']);
$tourinfo['desc'] = str_replace("\n", "", $tourinfo['desc']);
$tourinfo['desc'] = str_replace("\r", "", $tourinfo['desc']);
if(!is_array($tourinfo))
{
	$tourinfo=array();
}

//// Slider Images of Tours ////////
$sliderimages=array();

$sliderimages=unserialize($tourinfo['other_images']);

$smarty->assign("sliderimages", $sliderimages);

$bodyclass='not-front page-about';
$smarty->assign("bodyclass", $bodyclass);

$smarty->assign("datainfo", $tourinfo);

///////////// Code Start to get Related Tours List /////////
$relatedtourslist=$function->object_to_array($function->get_data_list(GLOBAL_TOURS_TABLE,"id,title,seo_url,short_desc,featured_image",$tourinfo['tourpackageid'],'tourpackageid',$orderbyfield='rand()',$order='asc',1,6));
$smarty->assign("relatedtourslist", $relatedtourslist);
////////////// End of Code to Get Related Tours List ////////////


$smarty->display('tours-info.tpl');


?>