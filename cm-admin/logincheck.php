<?php require_once('assets/load.php'); ?>
<?php 
	$username = $_POST['loginid'];
	$password = $_POST['user_pass'];
		
	if($function->check_login($username,$password)){		
		$function->cm_redirect(BASE_ADMIN_URL);
	}else{	
	
		$_SESSION['admin_userid']='';
		$_SESSION['admin_username']='';
		$_SESSION['admin_usertype']='';
		unset($_SESSION['admin_userid']);
		unset($_SESSION['admin_username']);
		unset($_SESSION['admin_usertype']);
		
		$_SESSION['message']='error';
		$url=BASE_ADMIN_URL.'login.php?message=error';
		$function->cm_redirect($url);
	}	
?>