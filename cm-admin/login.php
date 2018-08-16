<?php

require_once('assets/load.php');
// $function->cm_password_decryption("c3RvbmViZWFkczEyMzQ1Ng==");
echo $function->cm_password_encryption('admin@123');
if(isset($_REQUEST['loginid']))
{
	require_once('logincheck.php');	
	exit;
}
?><!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title><?php echo SITE_TITLE; ?> | Admin Login</title>
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

			<style type="text/css">
			body { background-color:#333333;}
			.login-box {padding-top:5px;}
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div style="width:100%; padding:15px;"></div>
		<div class="row-fluid">
					
			<div class="row-fluid">
			
				<div class="login-box">
				<div  align="center" ><img src="<?php echo BASE_ADMIN_URL;?>images/logo.png" align="center" /></div>
				  <?php	if ( isset($_REQUEST['message']) && $_REQUEST['message'] == 'error'){ ?>
				 <div class="alert alert-error"> <?php echo "Make sure that your login ID and password are correct.";?></div>
				  <?php } ?>
					<div class="icons">
						<a href="<?php echo SITE_URL;?>" target="_blank"><i class="halflings-icon home"></i></a>
						<a href="<?php echo BASE_ADMIN_URL;?>"><i class="halflings-icon cog"></i></a>
					</div
					
					><h2>Login to your account</h2>
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="loginid" tabindex="1" id="loginid" type="text" placeholder="type username" onClick="setblankvalue();" value="type username"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="user_pass" tabindex="2" id="user_pass" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>
							
							

							<div class="button-login">	
								 <button type="submit" class="btn btn-primary">Login</button> <button type="reset" class="btn btn-primary">Reset</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo BASE_ADMIN_URL;?>js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/modernizr.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/bootstrap.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.cookie.js"></script>
	
		<script src='<?php echo BASE_ADMIN_URL;?>js/fullcalendar.min.js'></script>
	
		<script src='<?php echo BASE_ADMIN_URL;?>js/jquery.dataTables.min.js'></script>

		<script src="<?php echo BASE_ADMIN_URL;?>js/excanvas.js"></script>
	<script src="j<?php echo BASE_ADMIN_URL;?>s/jquery.flot.js"></script>
	<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.flot.pie.js"></script>
	<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.flot.stack.js"></script>
	<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.noty.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.raty.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/counter.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/retina.js"></script>

		<script src="<?php echo BASE_ADMIN_URL;?>js/custom.js"></script>
	<!-- end: JavaScript-->
	<script type="text/javascript">
	function setblankvalue()
	{
		document.getElementById('loginid').value="";
		document.getElementById('user_pass').value="";
		
	}
	
	</script>
</body>
</html>
