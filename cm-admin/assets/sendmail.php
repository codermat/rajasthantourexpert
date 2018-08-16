<?php 
function send_mail($mailid, $mailsubject, $mailbody)
{
		/////////// Code Start to Send mail /////////
	
	$mail = new PHPMailer;
		$mail->IsSMTP(); 
		$mail->Host       = "mail3.gridhost.co.uk"; 
		$mail->SMTPDebug  = 0;                
		$mail->SMTPAuth   = true; 
		$mail->SMTPSecure = "ssl";
		$mail->Host       = "mail3.gridhost.co.uk"; 
		$mail->Port       = 465; 
		$mail->FromName   = MAILFROMNAME; 
		$mail->Username   = MAILFROM;
		$mail->Password   = "MLNWUkMOGL+B"; 
		
		//Set who the message is to be sent from
		$mail->setFrom(MAILFROM, MAILFROMNAME);
		//Set an alternative reply-to address
		$mail->addReplyTo(MAILFROM, MAILFROMNAME);
		//Set who the message is to be sent to
		$mail->addAddress($mailid);
		$mail->addBCC(MAILBCC);
		
		//Set the subject line
		$mail->Subject = $mailsubject;
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		
		global $options;
		$logourl = $options['cm_logo'];
		if($logourl=='')
		{
			$logourl=TEMPLATE_URL."images/logo.png";
		}
		$mailheader="<div style='background: #fff;width:100%'><img src='$logourl' width='240' /></div> \n\n <hr> <br><br>";
		$mailfooter="<br><br>
					Regards,
					<br> <h2>Impexly.com</h2>
					<br><br><hr>";
		$mailbody=	$mailheader.$mailbody.$mailfooter;
		
		$mail->msgHTML($mailbody);
		//Replace the plain text body with one created manually
		$mail->AltBody = 'Sorry Message could not send. please contact your technical person to look the issue.';
		//Attach an image file
		//$mail->addAttachment('images/phpmailer_mini.png');
		
		//send the message, check for errors
		if (!$mail->send()) {
			//echo "Message was not sent";			
			
		} else {
		  
		}
	/////////// End of Code to Send mail //////////
}



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
					
				$findarray=array('#MESSAGE#','#USER_NAME#','#SUBJECT#','#USER_EMAIL#','#CONTACT_NUMBER#');
				
				$replacearray=array($_POST['message'],$_POST['user_name'],$_POST['subject'],$_POST['user_email'],$_POST['contact_number']);
				
				$mailbody=str_replace($findarray,$replacearray,$enquirytemplate);								
	
	send_mail(NOTIFYMAIL, $mailsubject, $mailbody);
}else
{
	$_SESSION['success_message']='<div ><h3 style="color:red">Please confirm that you are human not robot.</h3> </div>';			
$function->cm_redirect($referer);
exit;
}

$_SESSION['success_message']='<div ><h3 style="color:#0B610B">Your inquiry was submitted and will be responded to as soon as possible. Thank you for contacting us.</h3></div>';			
$function->cm_redirect($referer);
exit;
}
///////// Contact Form Email Send Code Ends here //////////////
?>