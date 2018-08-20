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

$smarty->display('index.tpl');
?>