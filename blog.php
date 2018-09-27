<?php
require_once("common.php");
$bodyclass='not-front page-fleet';
$smarty->assign("bodyclass", $bodyclass);

$activepage='blog';
$smarty->assign("activepage", $activepage);
$bloginfo['meta_title']="Blog";

///////// Code Start to Get Blog Posts List ///////////////
if(isset($_REQUEST['paged']))
{
	$paged=$_REQUEST['paged'];
}else
{
	$paged=1;
}
if(isset($_REQUEST['limit']))
{
	$limit=$_REQUEST['limit'];
}else
{
	$limit=16;
}
if(isset($_REQUEST['order']))
{
	$order=$_REQUEST['order'];
	$orderby="title";
}
if($orderby=="")
{
	$orderby="id";
	$order="desc";
}
$blogposts=$function->object_to_array($function->get_data_list(GLOBAL_BLOG_TABLE,"id,title,seo_url,short_desc,featured_image",'t','status',$orderby,$order,$paged,$limit));

$smarty->assign("blogposts", $blogposts);

////////// End of Code to Get Blog Posts List /////////////
//////////// Code Starts for Pagination ////////////

$smarty->assign("paged", $paged);
$smarty->assign("order", $order);
$smarty->assign("limit", $limit);

$NoOfRecords=array();
$NoOfRecords=$function->object_to_array($function->get_data_list(GLOBAL_BLOG_TABLE,"id",'t','status',$orderby,$order));


if(isset($_REQUEST['limit']))
{
	$urlsubstring=$limit."/".$order."/";
}else
{
	$urlsubstring='';
}
$baseurl=SITE_URL."blog/paged/".$urlsubstring;

$pagination=get_pagination($baseurl,$NoOfRecords,$limit,$paged);

$smarty->assign("pagination", $pagination);
///////////// End of Code for Creating Pagination //////////

$smarty->assign("datainfo", $bloginfo);
$smarty->display('blog.tpl');
?>