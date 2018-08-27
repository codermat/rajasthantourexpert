<?php require_once('../assets/load.php');
require_once('module.php');
if($function->is_login())
{
		if(isset($_REQUEST['id']) && $_REQUEST['id']!='') 
		{
			$id=$_REQUEST['id'];
		$delete_query="DELETE FROM ".MODULE_TABLE_NAME." WHERE id ='".$id."'"; 
			$function->query($delete_query);
			$_SESSION['Message'] = "Information Deleted Successfully.";
			
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

