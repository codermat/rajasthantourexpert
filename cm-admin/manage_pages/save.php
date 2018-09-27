<?php require_once('../assets/load.php');
require_once('module.php');
if($function->is_login())
{
		if(isset($_REQUEST['id']) && $_REQUEST['id']!='') 
		{
			$data=array();
			$where=array();
			$data['title']=escape_value($_REQUEST['title']);	
			$data['sub_title']=escape_value($_REQUEST['sub_title']);	
			$data['pagetype']=escape_value($_REQUEST['pagetype']);								
			$data['seo_url']=escape_value($function->seo_url($_REQUEST['title']));	
			$data['meta_title']=escape_value($_REQUEST['meta_title']);	
			$data['meta_tag_keywords']=escape_value($_REQUEST['meta_tag_keywords']);			
			$data['meta_tag_descriptions']=escape_value($_REQUEST['meta_tag_descriptions']);	
			$data['featured_image']=escape_value($_REQUEST['featured_image']);	
			$data['short_desc']=addslashes($_REQUEST['short_desc']);
			$data['desc']=addslashes($_REQUEST['desc']);			
			$data['status']=escape_value($_REQUEST['status']);			
			$where['id']=$_REQUEST['id'];
			$db->update( MODULE_TABLE_NAME, $data,$where ) ;
			
			$_SESSION['Message'] = "Information Updated Successfully.";
		}else
		{
			$data['title']=escape_value($_REQUEST['title']);	
			$data['sub_title']=escape_value($_REQUEST['sub_title']);			
			$data['pagetype']=escape_value($_REQUEST['pagetype']);		
			$data['seo_url']=escape_value($function->seo_url($_REQUEST['title']));	
			$data['meta_title']=escape_value($_REQUEST['meta_title']);	
			$data['meta_tag_keywords']=escape_value($_REQUEST['meta_tag_keywords']);			
			$data['meta_tag_descriptions']=escape_value($_REQUEST['meta_tag_descriptions']);
			$data['featured_image']=escape_value($_REQUEST['featured_image']);
			$data['short_desc']=addslashes($_REQUEST['short_desc']);
			$data['desc']=addslashes($_REQUEST['desc']);		
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