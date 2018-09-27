<?php require_once('../assets/load.php');
require_once('module.php');
if($function->is_login())
{
		if(isset($_REQUEST['id']) && $_REQUEST['id']!='') 
		{
			$data=array();
			$where=array();
			$data['title']=escape_value($_REQUEST['title']);					
			$data['seo_url']=escape_value($function->seo_url($_REQUEST['title']));	
			$data['tourpackageid']=escape_value($_REQUEST['tourpackageid']);
			$data['start_destination']=escape_value($_REQUEST['start_destination']);
			$data['meta_title']=escape_value($_REQUEST['meta_title']);	
			$data['meta_tag_keywords']=escape_value($_REQUEST['meta_tag_keywords']);			
			$data['meta_tag_descriptions']=escape_value($_REQUEST['meta_tag_descriptions']);
			$data['duration']=escape_value($_REQUEST['duration']);
			$data['destination']=escape_value($_REQUEST['destination']);
			
			$data['featured_image']=escape_value($_REQUEST['featured_image']);
			$data['short_desc']=addslashes($_REQUEST['short_desc']);
			$data['desc']=addslashes($_REQUEST['desc']);
			$data['tour_map']=addslashes($_REQUEST['tour_map']);
				
			$data['other_images']=serialize($_REQUEST['other_images']);		
			$data['status']=escape_value($_REQUEST['status']);
			
			$where['id']=$_REQUEST['id'];
			$db->update( MODULE_TABLE_NAME, $data,$where ) ;
			
			$_SESSION['Message'] = "Information Updated Successfully.";
		}else
		{
			$data['title']=escape_value($_REQUEST['title']);			
			$data['seo_url']=escape_value($function->seo_url($_REQUEST['title']));	
			$data['tourpackageid']=escape_value($_REQUEST['tourpackageid']);
			$data['start_destination']=escape_value($_REQUEST['start_destination']);
			$data['meta_title']=escape_value($_REQUEST['meta_title']);	
			$data['meta_tag_keywords']=escape_value($_REQUEST['meta_tag_keywords']);			
			$data['meta_tag_descriptions']=escape_value($_REQUEST['meta_tag_descriptions']);
			$data['duration']=escape_value($_REQUEST['duration']);
			$data['destination']=escape_value($_REQUEST['destination']);
			
			$data['featured_image']=escape_value($_REQUEST['featured_image']);
			$data['short_desc']=addslashes($_REQUEST['short_desc']);
			$data['desc']=addslashes($_REQUEST['desc']);	
			$data['tour_map']=addslashes($_REQUEST['tour_map']);
			$data['other_images']=serialize($_REQUEST['other_images']);		
			$data['status']=escape_value($_REQUEST['status']);
			$data['dateadded']=time();
			
			
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