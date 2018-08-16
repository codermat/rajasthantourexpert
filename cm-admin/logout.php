<?php
require_once('assets/load.php');
session_destroy();
unset($_SESSION['yuwam_userid']);
unset($_SESSION['yuwam_username']);
unset($_SESSION['yuwam_usertype']);
header("Location: login.php");
exit;
?>