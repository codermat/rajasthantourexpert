<?php
require_once("common.php");
$bodyclass='not-front page-services';
$smarty->assign("bodyclass", $bodyclass);

$activepage='tour-packages';
$smarty->assign("activepage", $activepage);

$smarty->display('tour-packages.tpl');
?>