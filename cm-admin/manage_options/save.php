<?php require_once('../assets/load.php');
require_once('module.php');
if($function->is_login())
{
		if(isset($_REQUEST['id']) && $_REQUEST['id']!='') 
		{
			$data=array();
			$where=array();
			
			$data['option_name']=escape_value($_REQUEST['option_name']);	

			if($_REQUEST['type']=="social_media" || $_REQUEST['type']=="slider_images" || $_REQUEST['type']=="imageads")	
			{			
				$data['option_value']=serialize($_REQUEST['option_value']);								
			}else{
				
				$data['option_value']=addslashes($_REQUEST['option_value']);	
			}	
			$where['id']=$_REQUEST['id'];
			$db->update( MODULE_TABLE_NAME, $data,$where ) ;
			
			$_SESSION['Message'] = "Information Updated Successfully.";
		}else
		{
			if($_REQUEST['type']=="social_media" || $_REQUEST['type']=="slider_images" || $_REQUEST['type']=="imageads")	
			{			
				$data['option_value']=serialize($_REQUEST['option_value']);								
			}else{
				
				$data['option_value']=escape_value($_REQUEST['option_value']);	
			}
			$data['option_name']=escape_value($_REQUEST['option_name']);					
			$data['option_value']=addslashes($_REQUEST['option_value']);	
			
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