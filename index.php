<?php
require_once("common.php");
$is_home='true';
$smarty->assign("is_home", $is_home);


$smarty->display('index.tpl');
?>