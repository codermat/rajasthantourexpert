<?php require_once('../assets/load.php');
require_once('module.php');
if($function->is_login())
{
		if(isset($_REQUEST['id']) && $_REQUEST['id']!='') 
		{
			$data=array();
			$where=array();
			    /* 
			$data['title']=escape_value($_REQUEST['title']);				
			$data['helper']=($_REQUEST['helper']);	
			$data['about_email']=($_REQUEST['about_email']);
				*/
			$data['email_subject']=escape_value($_REQUEST['email_subject']);			
			$data['email_body']=($_REQUEST['email_body']);
			$data['status']=escape_value($_REQUEST['status']);
			
			$where['id']=$_REQUEST['id'];
			$db->update( MODULE_TABLE_NAME, $data,$where ) ;
			
			$_SESSION['Message'] = "Information Updated Successfully.";
		}else
		{
			/* $data['title']=escape_value($_REQUEST['title']);		
			$data['helper']=($_REQUEST['helper']);	
			$data['about_email']=($_REQUEST['about_email']); */				
			$data['email_subject']=escape_value($_REQUEST['email_subject']);			
			$data['email_body']=($_REQUEST['email_body']);	
						
			$data['status']=escape_value($_REQUEST['status']);
		
			
			
			$db->insert( MODULE_TABLE_NAME, $data) ;
			$_SESSION['Message'] = "Information Saved Successfully.";
			
		}
			
			
			
		
		$pageurl=BASE_ADMIN_URL.MODULE_SUB_LOCATION;
		$function->cm_redirect($pageurl);
		exit;
		
	
	
	
	
}else
{
	$loginpage=BASE_ADMIN_URL.'login.php';
	$function->cm_redirect($loginpage);
	exit;
}
?>