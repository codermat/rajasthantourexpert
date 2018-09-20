<?php 
////////// Get a Quote Email Send Code Starts from here ////////////

if(isset($_POST['form_type']) && $_POST['form_type']=='get_a_quote')
{
/*
// your secret key
$secret = GOOGLE_RECAPTCHA_KEY;
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
$referer=$_POST['referer'];
if ($response != null && $response->success)
 {
 */
 				$referer=$_POST['referer'];
				$mailsubject="Get a quote enquiry from ".MAILFROMNAME;		
				$enquirytemplate=getmailtemplate("get_a_quote");				
					
				$findarray=array('#MESSAGE#','#USER_NAME#','#USER_EMAIL#','#CONTACT_NUMBER#');
				
				$replacearray=array($_POST['message'],$_POST['user_name'],$_POST['user_email'],$_POST['contact_number']);
				
				$mailbody=str_replace($findarray,$replacearray,$enquirytemplate);								
	
	send_mail(NOTIFYMAIL, $mailsubject, $mailbody);
/*	
}else
{
	$_SESSION['success_message']='<div ><h3 style="color:red">Please confirm that you are human not robot.</h3> </div>';			
$function->cm_redirect($referer);
exit;
}*/

$_SESSION['success_message']='Your inquiry was submitted and will be responded to you as soon as possible. Thank you for contacting us.';			
$function->cm_redirect($referer);
exit;
}
///////// Get a Quote Email Send Code Ends here //////////////

////////// Contact Form Email Send Code Starts from here ////////////

if(isset($_POST['form_type']) && $_POST['form_type']=='contact_us')
{
// your secret key
$secret = GOOGLE_RECAPTCHA_KEY;
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
$referer=$_POST['referer'];
if ($response != null && $response->success)
 {
				$mailsubject="Contact us Enquiry from ".MAILFROMNAME;		
				$enquirytemplate=getmailtemplate("contact_enquiry");				
					
				$findarray=array('#MESSAGE#','#FIRST_NAME#','#LAST_NAME#','#USER_EMAIL#','#CONTACT_NUMBER#');
				
				$replacearray=array($_POST['message'],$_POST['first_name'],$_POST['last_name'],$_POST['user_email'],$_POST['contact_number']);
				
				$mailbody=str_replace($findarray,$replacearray,$enquirytemplate);								
	
	send_mail(NOTIFYMAIL, $mailsubject, $mailbody);
}else
{
	$_SESSION['success_message']='<div ><span style="color:red">Please confirm that you are human not robot.</h3> </div>';			
$function->cm_redirect($referer);
exit;
}

$_SESSION['success_message']='<span style="color:#0B610B">Your inquiry was submitted and will be responded to as soon as possible. Thank you for contacting us.</span>';			
$function->cm_redirect($referer);
exit;
}
///////// Contact Form Email Send Code Ends here //////////////
?>