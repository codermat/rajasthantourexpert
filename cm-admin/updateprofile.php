<?php require_once('assets/load.php');

if($function->is_login())
{
		if(isset($_REQUEST['user_login']) && $_REQUEST['user_login']!='' && isset($_REQUEST['user_pass']) && $_REQUEST['user_pass']!='') 
		{
			
			$data['user_title']=escape_value($_REQUEST['user_title']);
			$data['user_nicename']=escape_value($_REQUEST['user_nicename']);
			$data['user_email']=escape_value($_REQUEST['user_email']);
			$data['user_login']=escape_value($_REQUEST['user_login']);
			$data['user_pass']=escape_value($function->cm_password_encryption($_REQUEST['user_pass']));
			
											
			
			$where['ID']=$_SESSION['admin_userid'];
			$db->update( GLOBAL_USER_TABLE, $data,$where ) ;
			
			
			$_SESSION['Message'] = "Information Saved Successfully.";
			
		}
			
			
			
		
		$pageurl=BASE_ADMIN_URL.'profile.php';
		$function->cm_redirect($pageurl);
		exit;
		
	
	
	
	
}else
{
	$loginpage=BASE_ADMIN_URL.'login.php';
	$function->cm_redirect($loginpage);
	exit;
}
?>