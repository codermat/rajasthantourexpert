<?php require_once('assets/load.php');

if($function->is_login())
{
if($function->is_admin_login())
			{
			
			
			
			$optionsdata=$_REQUEST;
			foreach($optionsdata as $key => $value)
			{
				$data['option_value']=$value;
				$where['option_name']=$key;
			$db->update( GLOBAL_OPTIONS_TABLE, $data,$where ) ;
			}
			
			$_SESSION['Message'] = "Information Saved Successfully.";
			}
					
			
		
		$pageurl=BASE_ADMIN_URL.'slider_images.php';
		$function->cm_redirect($pageurl);
		exit;
		
	
	
	
	
}else
{
	$loginpage=BASE_ADMIN_URL.'login.php';
	$function->cm_redirect($loginpage);
	exit;
}
?>