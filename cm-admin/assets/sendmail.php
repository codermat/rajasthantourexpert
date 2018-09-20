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
					<br> <h2>Rajasthan Tour Expert</h2>
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




?>