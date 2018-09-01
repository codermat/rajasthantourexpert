<?php
require_once("common.php");
$bodyclass='not-front page-fleet';
$smarty->assign("bodyclass", $bodyclass);

$activepage='destinations';
$smarty->assign("activepage", $activepage);


///////// Code Start to Get Destinations List ///////////////
if(isset($_REQUEST['paged']) && $_REQUEST['paged']!='')
{
	$paged=$_REQUEST['paged'];
}else
{
	$paged=1;
}
$destinationslist=$function->object_to_array($function->get_data_list(GLOBAL_DESTINATIONS_TABLE,"id,title,seo_url,short_desc,featured_image",'t','status',$orderbyfield='title, title',$order='asc',1,16));

$smarty->assign("destinationslist", $destinationslist);

////////// End of Code to Get Destinations List /////////////
$smarty->display('destinations.tpl');
?>