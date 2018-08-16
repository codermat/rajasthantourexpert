<?php
require_once('assets/load.php');
 require_once("fckeditor/fckeditor.php") ;
if(!$function->is_login())
{
	$loginpage=BASE_ADMIN_URL.'login.php';
	$function->cm_redirect($loginpage);
	exit;
	//header('Location:'.$globals->Adminurl);
}
$userid=$_SESSION['admin_userid'];
global $current_user;
$current_user=$function->login_user_info($userid);		
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
       <title><?php echo SITE_TITLE; ?></title>
	<meta name="robots" content="noindex" />
	<meta name="keyword" content="<?php echo SITE_META_TAG_DKEYWORDS;?>">
	<meta name="description" content="<?php echo SITE_META_TAG_DESC;?>">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo BASE_ADMIN_URL;?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo BASE_ADMIN_URL;?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo BASE_ADMIN_URL;?>css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo BASE_ADMIN_URL;?>css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?php echo BASE_ADMIN_URL;?>css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="<?php echo BASE_ADMIN_URL;?>css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo BASE_ADMIN_URL;?>img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" target="_blank" href="<?php echo SITE_URL;?>"><span><?php echo SITE_TITLE; ?></span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
												
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="<?php echo BASE_ADMIN_URL;?>">
								<i class="halflings-icon white user"></i> Admin
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="<?php echo BASE_ADMIN_URL;?>profile.php"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="<?php echo BASE_ADMIN_URL;?>logout.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?php require_once('menu.php');?>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>