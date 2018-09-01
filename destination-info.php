<?php
require_once("common.php");

$activepage='destinations';
$smarty->assign("activepage", $activepage);

$tourinfo=$function->object_to_array($function->get_data_info(GLOBAL_DESTINATIONS_TABLE,$_REQUEST['destinationid'],'seo_url'));

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
$smarty->display('destination-info.tpl');


?>