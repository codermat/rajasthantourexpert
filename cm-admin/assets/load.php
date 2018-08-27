<?php 
/////////////////// Site Basic Configuration ///////////////
if($_SERVER['HTTP_HOST']=="localhost"){
	define("SITE_URL", "http://localhost/rajasthantourexpert/");
	
}
else{
	define("SITE_URL", "https://rajasthantourexpert.com/");
}
define("TEMPLATE_URL", SITE_URL."templates/");
define("IMAGE_URL", SITE_URL."templates/images/");
define("CSS_URL", SITE_URL."templates/css/");
define("ROOTPATH", dirname(realpath(__FILE__)) . "/");
define("TEMPLATEPATH", ROOTPATH . "templates/");
define("BASE_ADMIN_URL", SITE_URL . "cm-admin/");

define("SEO_SUFFIX",".html");


////////// Very Very Important ////////
define("SECURITY_SALT","rajasthan_tour");
define("GOOGLE_RECAPTCHA_KEY","6Lenmk4UAAAAAJ9n4QtPsqlT8lQXHPh02OuDtFz1");
define("GOOGLE_RECAPTCHA_PUBLIC_KEY","6Lenmk4UAAAAAEIRyzz-O0MtIfiPjMoP-1bll9X7");

//////////// Should not be Changed //////
////////////////// End of Site Basic Configuration //////////
/////////////// Database Tables Configuration //////////////
define('GLOBAL_DB_PREFIX',"cm_");

define('GLOBAL_OPTIONS_TABLE',GLOBAL_DB_PREFIX."options");

define('GLOBAL_USER_TABLE',GLOBAL_DB_PREFIX."users");
define('GLOBAL_TOUR_PACKAGE_TABLE',GLOBAL_DB_PREFIX."tour_packages");
define('GLOBAL_TOURS_TABLE',GLOBAL_DB_PREFIX."tours");
define('GLOBAL_DESTINATIONS_TABLE',GLOBAL_DB_PREFIX."destinations");
define('GLOBAL_PAGE_TABLE',GLOBAL_DB_PREFIX."pages");
define('GLOBAL_FAQ_TABLE',GLOBAL_DB_PREFIX."faq");
define('GLOBAL_TESTIMONIALS_TABLE',GLOBAL_DB_PREFIX."testimonials");
define('GLOBAL_SERVICE_TABLE',GLOBAL_DB_PREFIX."services");

define('GLOBAL_COUNTRY_TABLE',GLOBAL_DB_PREFIX."country");
define('GLOBAL_CUSTOMER_TABLE',GLOBAL_DB_PREFIX."customer");
define('GLOBAL_ORDER_TABLE',GLOBAL_DB_PREFIX."orders");


////////////// End of Database Tables Configuration //////////

//////////// Email Global Variable ///////////
define("MAILFROMNAME","Rajasthan Tour Experts");
define("MAILFROM","notify@rajasthantourexpert.com");
define("NOTIFYMAIL","support@rajasthantourexpert.com");
define("NOTIFYADMINMAIL","support@rajasthantourexpert.com");



define("MAILCC","");
define("MAILBCC","");
/////////// End of Email Global Variable ///////
/////// info /////// Dn=s1vmrrLuX /////////////
//////// Global Class Constructed to use in program //////////

session_start();
class globals {
	
	function __construct( ) {
		
	} 
	
}
$globals = new globals;
////////// End of Global Class //////////////////
/////// Global Variable Starts Here ///////////
define("SITE_TITLE","Rajasthan Tour Experts");
define("TECHNICAL_TEAM","Technical Team");
define("SITE_META_TAG_KEYWORDS","Rajasthan Tour Experts");
define("SITE_META_TAG_DESC","Rajasthan Tour Experts");

global $pagetype;
$pagetype[]="left-sidebar";
$pagetype[]="full-width";
$pagetype[]="faq";
$pagetype[]="contact-us";


/////// End of Global Variable ///////////
require_once(ROOTPATH.'db.php');
require_once('smtp/PHPMailerAutoload.php');

require_once(ROOTPATH.'functions.php');
global $options;
$options=array();
$options=$function->get_options();
require_once(ROOTPATH.'sendmail.php');
require_once(ROOTPATH.'custom_functions.php');
require('smarty/Smarty.class.php');
	

?>