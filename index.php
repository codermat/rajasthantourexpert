<?php
require_once("common.php");
$is_home='true';
$smarty->assign("is_home", $is_home);

////////// Code Start for Slider Images //////
$Slidersinfo = array();
$slidersinfo=unserialize($newoption['slider_images']);
if(isset($slidersinfo['image']))
{
	$smarty->assign("sliderimages", $slidersinfo['image']);
}
if(isset($slidersinfo['link']))
{
	$smarty->assign("sliderimagestitle", $slidersinfo['link']);
}
///////// End of Code for Slider Images //////
////////// Code Starts for Home Advertisement ////////
$homefirstadinfo=unserialize($newoption['home_image_ad_1']);
$smarty->assign("homefirstadinfo", $homefirstadinfo);

$homesecondadinfo=unserialize($newoption['home_image_ad_2']);
$smarty->assign("homesecondadinfo", $homesecondadinfo);

///////// End of Code for Home Advertisement ////////


///////// Code Start to Get Special Product info ///////////////
$tourslist=$function->object_to_array($function->get_data_list(GLOBAL_TOURS_TABLE,"id,title,seo_url,short_desc,featured_image,duration,destination",1,'tourpackageid',$orderbyfield='rand(), title',$order='asc',1,10));

$smarty->assign("tourslist", $tourslist);


////////// End of Code to Get Tours of a  Tour Packages /////////////

///////// Code Start to Get Featured Destinations info ///////////////
$destinationslist=$function->object_to_array($function->get_data_list(GLOBAL_DESTINATIONS_TABLE,"id,title,seo_url,short_desc,featured_image",'t','is_featured',$orderbyfield='rand(), title',$order='asc',1,8));

$smarty->assign("destinationslist", $destinationslist);

////////// End of Code to Get Featured Destinations /////////////

///////// Code Start to Get Service info ///////////////
$servicelist=$function->object_to_array($function->get_data_list(GLOBAL_SERVICE_TABLE,"*",'t','status',$orderbyfield='rand(), title',$order='asc',1,6));

$smarty->assign("servicelist", $servicelist);

////////// End of Code to Get Services /////////////

$smarty->display('index.tpl');
?>