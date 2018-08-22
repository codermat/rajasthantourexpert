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
$tourslist=$function->object_to_array($function->get_data_list(GLOBAL_TOURS_TABLE,"id,title,seo_url,short_desc,featured_image,short_desc,duration,destination",1,'tourpackageid',$orderbyfield='rand(), title',$order='asc',1,10));

$smarty->assign("tourslist", $tourslist);


////////// End of Code to Get Tours of a  Tour Packages /////////////


$smarty->display('index.tpl');
?>