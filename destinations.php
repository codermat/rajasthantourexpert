<?php
require_once("common.php");
$bodyclass='not-front page-fleet';
$smarty->assign("bodyclass", $bodyclass);

$activepage='destinations';
$smarty->assign("activepage", $activepage);

$smarty->display('destinations.tpl');
?>