<?php
require_once("common.php");
$bodyclass='not-front page-services';
$smarty->assign("bodyclass", $bodyclass);

$activepage='tour-packages';
$smarty->assign("activepage", $activepage);

///////// Tour Package Information Starts here /////////////
$tourpackageinfo=$function->object_to_array($function->get_data_info(GLOBAL_TOUR_PACKAGE_TABLE,$_REQUEST['tourpackageid'],'seo_url'));

$tourpackageinfo['short_desc']=html_entity_decode($tourpackageinfo['short_desc']);
$tourpackageinfo['desc']=html_entity_decode($tourpackageinfo['desc']);

$tourpackageinfo['short_desc'] = str_replace("\n", "", $tourpackageinfo['short_desc']);
$tourpackageinfo['short_desc'] = str_replace("\r", "", $tourinfo['short_desc']);
$tourpackageinfo['desc'] = str_replace("\n", "", $tourpackageinfo['desc']);
$tourpackageinfo['desc'] = str_replace("\r", "", $tourpackageinfo['desc']);
if(!is_array($tourpackageinfo))
{
	$tourpackageinfo=array();
}
$smarty->assign("datainfo", $tourpackageinfo);
//////// End of Code for Tour Package Information Ends here ////

//////////// Code Start to Get Tours List //////////
if(isset($_REQUEST['paged']) && $_REQUEST['paged']!='')
{
	$paged=$_REQUEST['paged'];
}else
{
	$paged=1;
}
if(isset($_REQUEST['tourpackageid']) && $_REQUEST['tourpackageid']!='')
{
	$tourpackageid=$_REQUEST['tourpackageid'];

$tourslist=$function->object_to_array($function->get_data_list(GLOBAL_TOURS_TABLE,"id,title,seo_url,short_desc,featured_image,duration,destination",1,'tourpackageid',$orderbyfield='rand(), title',$order='asc',$paged,12));

$smarty->assign("tourslist", $tourslist);

}

//////////// End of Code to Get Tours List ///////////

$smarty->display('tour-packages.tpl');
?>