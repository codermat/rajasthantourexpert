<?php
require_once("common.php");

$activepage='destinations';
$smarty->assign("activepage", $activepage);

$destinationinfo=$function->object_to_array($function->get_data_info(GLOBAL_DESTINATIONS_TABLE,$_REQUEST['destinationid'],'seo_url'));

$destinationinfo['short_desc']=html_entity_decode($destinationinfo['short_desc']);
$destinationinfo['desc']=html_entity_decode($destinationinfo['desc']);

$destinationinfo['short_desc'] = str_replace("\n", "", $destinationinfo['short_desc']);
$destinationinfo['short_desc'] = str_replace("\r", "", $destinationinfo['short_desc']);
$destinationinfo['desc'] = str_replace("\n", "", $destinationinfo['desc']);
$destinationinfo['desc'] = str_replace("\r", "", $destinationinfo['desc']);
if(!is_array($tourinfo))
{
	$tourinfo=array();
}

//// Slider Images of Tours ////////
$sliderimages=array();

$sliderimages=unserialize($destinationinfo['other_images']);

$smarty->assign("sliderimages", $sliderimages);

///////////// Code Start to get Starting Tours from Destination /////////
$relatedtourslist=$function->object_to_array($function->get_data_list(GLOBAL_TOURS_TABLE,"id,title,seo_url,short_desc,featured_image",$destinationinfo['id'],'start_destination',$orderbyfield='rand()',$order='asc',1,6));
$smarty->assign("relatedtourslist", $relatedtourslist);
$smarty->assign("totalrelatedtours", count($relatedtourslist));

////////////// End of Code to Get Starting Tours from Destination  ////////////

///////////// Code Start to get Sidebar Tours List /////////
$sidebartourslist=$function->object_to_array($function->get_data_list(GLOBAL_TOURS_TABLE,"id,title,seo_url,tourpackageid",'t','status',$orderbyfield='title',$order='asc',1,9999));
$smarty->assign("sidebartourslist", $sidebartourslist);

////////////// End of Code to Get Related Tours List ////////////
$bodyclass='not-front page-about';
$smarty->assign("bodyclass", $bodyclass);

$smarty->assign("datainfo", $destinationinfo);
$smarty->display('destination-info.tpl');


?>