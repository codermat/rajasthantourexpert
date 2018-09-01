<?php require_once('../assets/load.php');
require_once('module.php');
if($function->is_login())
{
		if(isset($_REQUEST['id']) && $_REQUEST['id']!='') 
		{
			$data=array();
			$where=array();
			$data['author']=escape_value($_REQUEST['author']);	
			$data['testimonials_desc']=escape_value($_REQUEST['testimonials_desc']);	
			$data['is_featured']=escape_value($_REQUEST['is_featured']);	
			$data['status']=escape_value($_REQUEST['status']);			
			$where['id']=$_REQUEST['id'];
			$db->update( MODULE_TABLE_NAME, $data,$where ) ;
			
			$_SESSION['Message'] = "Information Updated Successfully.";
		}else
		{
		$data['author']=escape_value($_REQUEST['author']);	
			$data['testimonials_desc']=escape_value($_REQUEST['testimonials_desc']);			
			$data['is_featured']=escape_value($_REQUEST['is_featured']);	
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