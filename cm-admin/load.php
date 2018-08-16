<?php 

/////////////////// Site Basic Configuration ///////////////
if($_SERVER['HTTP_HOST']=="localhost"){
	define("SITE_URL", "http://localhost/divorceitnew/");
}
else{
	define("SITE_URL", "http://dwallindia.com/demo/divorce-it/");
}
define("ROOTPATH", dirname(realpath(__FILE__)) . "/");
define("TEMPLATEPATH", ROOTPATH . "templates/");
define("ADMINPATH", ROOTPATH . "admin/");


////////////////// End of Site Basic Configuration //////////
/////////////// Database Tables Configuration //////////////
define('GLOBAL_DB_PREFIX',"cm_");
define('GLOBAL_LOGS_TABLE',GLOBAL_DB_PREFIX."logs");
////////////// End of Database Tables Configuration //////////
//////// Global Class Constructed to use in program //////////
session_start();
class globals {
	
	function __construct( ) {
		
	} 
	
	
	
}
$globals = new globals;
////////// End of Global Class //////////////////
require_once(ROOTPATH.'assets/db.php');
require_once(ROOTPATH.'assets/functions.php');
///////////// Global Variable that will be used across the website ////////////////
$seo_title="::DivorceIt::";
$seo_keywords ="Divorceit, Ontario Divorce, Divorce in Ontario";
$seo_description="We simplify the divorce process in Ontario";
global $options;
$options['logo']=SITE_URL."images/logo.png";
$options['top_address']="<strong>96 John Street</strong><span>Brampton, ON  L6W 1Z5</span>";
$options['top_contact_no']="<strong>(905) 867-4828</strong><span>Free Case Consultation</span>";
$options['banner_image']=SITE_URL."images/banner.jpg";
$options['banner_title']="Ontario";
$options['banner_text']="We simplify the divorce process.";
$options['footer_copyright_message']= "© 2015 Divorce  i.T..  All rights reserved | ";
   
///////////// End of Global Variable that will be used across the website ////////////////

	
	
?>