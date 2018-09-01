<?php

require_once('cm-admin/assets/load.php');

require_once('google_recaptchalib.php');
$smarty = new Smarty;

$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;





///// Code Start to Get All Options of website /////
global $options;


$newoption=array();
if(is_array($options))
{
	foreach($options as $key => $value)
	{
		$newoption[$key]=html_entity_decode($value);
	}
}
$smarty->assign("options", $newoption);
$smarty->assign("url_suffix",SEO_SUFFIX);
$smarty->assign('siteurl', SITE_URL);
$smarty->assign('adminurl', BASE_ADMIN_URL);
$smarty->assign("recaptcha_public_key",GOOGLE_RECAPTCHA_PUBLIC_KEY);
$smarty->assign('templateurl', TEMPLATE_URL);

$socialoptions=array();
$socialoptions=unserialize($newoption['social_media']);
$socialoptions['facebook']=$socialoptions['Facebook'];
$socialoptions['linkedin']=$socialoptions['LinkedIn'];
$socialoptions['instagram']=$socialoptions['Instagram'];
$socialoptions['pin']=$socialoptions['Pin Interest'];
$socialoptions['gplus']=$socialoptions['Google Plus'];
$socialoptions['rssfeed']=$socialoptions['RSS Feed'];
$smarty->assign("socialoptions", $socialoptions);

$is_home='false';
$smarty->assign("is_home", $is_home);

////// End of Code to Get All Options of Website //////

//////// Code Start to Get Page List for Menu ////////
$pagelist=array();
$pagedata=$function->object_to_array($function->get_data_list(GLOBAL_PAGE_TABLE,'id,title,seo_url','t','status'));
for($i=0;$i<count($pagedata);$i++)
{
	$pagelist[$pagedata[$i]['id']]['title']=$pagedata[$i]['title'];
	$pagelist[$pagedata[$i]['id']]['seo_url']=$pagedata[$i]['seo_url'];
}

$smarty->assign('pagelist', $pagelist);
///////// End of Code to Get Page List for Menu ////////

////////// Code Starts for Tour Sidebar Advertisement ////////
$sidebarfirstadinfo=unserialize($newoption['sidebar_image_ad_1']);
$smarty->assign("sidebarfirstadinfo", $sidebarfirstadinfo);

$sidebarsecondadinfo=unserialize($newoption['sidebar_image_ad_2']);
$smarty->assign("sidebarsecondadinfo", $sidebarsecondadinfo);

///////// End of Code for Tour Sidebar Advertisement ////////
//////// Code Start to Footer Destination Link ////////
$menutourpackagelist=$function->object_to_array($function->get_data_list(GLOBAL_TOUR_PACKAGE_TABLE,"id,title,seo_url",'t','status',$orderbyfield='title, title',$order='asc',1,8));

$smarty->assign("menutourpackagelist", $menutourpackagelist);
$smarty->assign("sidebartourspackagelist", $menutourpackagelist);

///////// End of Code to Footer Destination Link ////////
//////// Code Start to Footer Destination Link ////////
$footertourpackagelist=$function->object_to_array($function->get_data_list(GLOBAL_TOUR_PACKAGE_TABLE,"id,title,seo_url",'t','in_footer',$orderbyfield='title, title',$order='asc',1,8));

$smarty->assign("footertourpackagelist", $footertourpackagelist);

///////// End of Code to Footer Destination Link ////////
//////// Code Start to Footer Destination Link ////////
$footerdestinationslist=$function->object_to_array($function->get_data_list(GLOBAL_DESTINATIONS_TABLE,"id,title,seo_url",'t','in_footer',$orderbyfield='title, title',$order='asc',1,8));

$smarty->assign("footerdestinationslist", $footerdestinationslist);

///////// End of Code to Footer Destination Link ////////


?>