<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance

$mail = new PHPMailer;
$mail->IsSMTP(); 
$mail->Host       = "blnx3.securehostdns.com"; 
$mail->SMTPDebug  = 1;                
$mail->SMTPAuth   = true; 
$mail->SMTPSecure = "tls";
$mail->Host       = "blnx3.securehostdns.com"; 
$mail->Port       = 587; 
$mail->FromName   = "Dewsis"; 
$mail->Username   = "info@dewsis.in";
$mail->Password   = "siswed@123"; 

//Set who the message is to be sent from
$mail->setFrom('info@dewsis.in', 'Dewsis');
//Set an alternative reply-to address
$mail->addReplyTo('info@dewsis.in', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('sikander_shekhawat@yahoo.com', 'Sikander Singh Shekhawat');
//Set the subject line
$mail->Subject = 'PHPMailer mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("it is good for us <b>Sikander</b>");
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
