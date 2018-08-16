<?php

function getemailtemplateinfo($id)
{
	global $db;
	$tablename=GLOBAL_EMAIL_TEMPLATES_TABLE;
	$query = "select * from $tablename where id = '".$id."' ";
		$result = $db->get_results($query);
		if($result)
			return $result[0];
	
}
function cm_send_new_user_email($emailid,$username,$password)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(1);   ///////////// ID : 1 used for send new user email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##site_login_url##','##your_site_name##','##username##','##username_email##','##user_password##');
				
				$replacearray=array(SITE_URL,SITE_LOGIN_URL,SITE_TITLE,$username,$emailid,$password);
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
			send_mail($emailid , $mailsubject, $mailbody);
	}		

}
function cm_send_new_user_confirmation_email($emailid,$username,$password,$activationurl)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(24);   ///////////// ID : 24 used for send new user confirmation email /////////
	
	$activationlink = "<a href='".$activationurl."'>Click here</a>";
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
				
					
				$findarray=array('##your_site_url##','##site_login_url##','##your_site_name##','##username##','##username_email##','##user_password##','##confirmationurl##','##confirmationlink##');
				
				$replacearray=array(SITE_URL,SITE_LOGIN_URL,SITE_TITLE,$username,$emailid,$password,$activationurl,$activationlink);
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
			send_mail($emailid , $mailsubject, $mailbody);
	}		

}
function cm_send_new_user_admin_email($emailid,$username)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(2);   ///////////// ID : 2 used for send new user admin email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##my_account_url##','##site_login_url##','##your_site_name##','##username##','##username_email##','##user_password##');
				
				$replacearray=array(SITE_URL,SITE_LOGIN_URL,SITE_LOGIN_URL,SITE_TITLE,$username,$emailid,$password);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
			send_mail(REGISTRATIONADMINMAIL , $mailsubject, $mailbody);
	}		

}

function cm_send_post_enquiry_not_approved_admin_email($enquiry_title,$username,$enquiryurl)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(3);   ///////////// ID : 3 used for send post enquiry not approved admin email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##my_account_url##','##site_login_url##','##your_site_name##','##username##','##username_email##','##user_password##','##project_name##',' ##project_link##');
				
				$replacearray=array(SITE_URL,SITE_LOGIN_URL,SITE_LOGIN_URL,SITE_TITLE,$username,$emailid,$password,$enquiry_title,$enquiryurl);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
			send_mail(REGISTRATIONADMINMAIL , $mailsubject, $mailbody);
	}		

}
function cm_send_post_enquiry_auto_approved_admin_email($enquiry_title,$username,$enquiryurl)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(4);   ///////////// ID : 4 used for send post enquiry auto approved admin email /////////
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##my_account_url##','##site_login_url##','##your_site_name##','##username##','##username_email##','##user_password##','##project_name##',' ##project_link##');
				
				$replacearray=array(SITE_URL,SITE_LOGIN_URL,SITE_LOGIN_URL,SITE_TITLE,$username,$emailid,$password,$enquiry_title,$enquiryurl);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
			send_mail(REGISTRATIONADMINMAIL , $mailsubject, $mailbody);
	}		

}
function cm_send_post_enquiry_not_approved_user_email($emailid,$enquiry_title,$username,$enquiryurl)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(5);   ///////////// ID : 5 used for send post enquiry not approved user email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##my_account_url##','##site_login_url##','##your_site_name##','##username##','##username_email##','##user_password##','##project_name##',' ##project_link##');
				
				$replacearray=array(SITE_URL,SITE_LOGIN_URL,SITE_LOGIN_URL,SITE_TITLE,$username,$emailid,$password,$enquiry_title,$enquiryurl);
					
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
			send_mail($emailid , $mailsubject, $mailbody);
	}		

}
function cm_send_post_enquiry_auto_approved_user_email($emailid,$enquiry_title,$username,$enquiryurl)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(6);   ///////////// ID : 6 used for send post enquiry auto approved user email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##my_account_url##','##site_login_url##','##your_site_name##','##username##','##username_email##','##user_password##','##project_name##',' ##project_link##');
				
				$replacearray=array(SITE_URL,SITE_LOGIN_URL,SITE_LOGIN_URL,SITE_TITLE,$username,$emailid,$password,$enquiry_title,$enquiryurl);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
			send_mail($emailid , $mailsubject, $mailbody);
	}		

}
function cm_send_forgot_password_email($emailid,$username,$password)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(22);   ///////////// ID : 22 used for send forgot password email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##site_login_url##','##your_site_name##','##username##','##username_email##','##user_password##');
				
				$replacearray=array(SITE_URL,SITE_LOGIN_URL,SITE_TITLE,$username,$emailid,$password);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
				
			send_mail($emailid , $mailsubject, $mailbody);
	}		

}

function cm_send_contact_page_enquiry_email($data)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(23);   ///////////// ID : 23 used for contact us page email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##your_site_name##','##first_name##','##last_name##','##subject##','##email_id##','##message##');
				
				$replacearray=array(SITE_URL,SITE_TITLE,$data['first_name'],$data['last_name'],$data['subject'],$data['email_id'],$data['cm_message']);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
				
			send_mail(CONTACTADMINMAIL , $mailsubject, $mailbody);
	}	
	
}

function cm_send_private_message_email($data)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(11);   ///////////// ID : 11 used for notification email of private message email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##your_site_name##','##site_login_url##','##my_account_url##','##sender_username##','##receiver_username##');
				
				$replacearray=array(SITE_URL,SITE_TITLE,SITE_LOGIN_URL,SITE_LOGIN_URL,$data['sender_username'],$data['receiver_username']);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
				
			send_mail($data['emailid'] , $mailsubject, $mailbody);
	}	
	
	
}

function cm_send_notification_of_quotation_to_buyer($data)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(17);   ///////////// ID : 17 used for notification email of quotation to buyer email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##your_site_name##','##site_login_url##','##my_account_url##','##username##','##project_name##','##project_link##','##bidder_username##','##bid_value##');
				
				$replacearray=array(SITE_URL,SITE_TITLE,SITE_LOGIN_URL,SITE_LOGIN_URL,$data['username'],$data['enquiry_title'],$data['enquiry_url'],$data['bidder_username'],$data['bid_value']);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
				
			send_mail($data['emailid'] , $mailsubject, $mailbody);
	}
	
}

function cm_send_notification_of_updated_quotation_to_buyer($data)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(26);   ///////////// ID : 26 used for notification email of updated quotation to buyer email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##your_site_name##','##site_login_url##','##my_account_url##','##username##','##project_name##','##project_link##','##bidder_username##','##bid_value##');
				
				$replacearray=array(SITE_URL,SITE_TITLE,SITE_LOGIN_URL,SITE_LOGIN_URL,$data['username'],$data['enquiry_title'],$data['enquiry_url'],$data['bidder_username'],$data['bid_value']);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
				
			send_mail($data['emailid'] , $mailsubject, $mailbody);
	}
	
}

function cm_send_notification_of_quotation_to_supplier($data)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(16);   ///////////// ID : 16 used for notification email of quotation to supplier email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##your_site_name##','##site_login_url##','##my_account_url##','##username##','##project_name##','##project_link##','##bidder_username##','##bid_value##');
				
				$replacearray=array(SITE_URL,SITE_TITLE,SITE_LOGIN_URL,SITE_LOGIN_URL,$data['username'],$data['enquiry_title'],$data['enquiry_url'],$data['bidder_username'],$data['bid_value']);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
				
			send_mail($data['emailid'] , $mailsubject, $mailbody);
	}	
	
}

function cm_send_notification_to_supplier_rating($data)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(12);   ///////////// ID : 12 used for notification email of rating to supplier email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##your_site_name##','##site_login_url##','##my_account_url##','##username##','##project_name##','##project_link##','##rating##','##comment##');
				
				$replacearray=array(SITE_URL,SITE_TITLE,SITE_LOGIN_URL,SITE_LOGIN_URL,$data['username'],$data['enquiry_title'],$data['enquiry_url'],$data['rating'],$data['comment']);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
				
			send_mail($data['emailid'] , $mailsubject, $mailbody);
	}	
	
}

function cm_send_notification_of_new_enquiry_posted($enquirydata)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(20);   ///////////// ID : 20 used for sending notification to all suppliers about posting new enquiry in their matching criterria   /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
		
		/////// Code Started to Get All Suppliers List who have subscribed notification of enquiry in that particular country and category ////
		
		global $db;		
		$category_id= $enquirydata['category_id'];		
		$country_id =  $enquirydata['country_id'];
		
		$userlistquery = "select en.user_id,cust.id,cust.email_id,cust.user_name from ".GLOBAL_EMAIL_NOTIFICATION_TABLE." en, ".GLOBAL_CUSTOMER_TABLE." cust where en.user_id=cust.id and category_id like '%,$category_id,%' and country_id like '%,$country_id,%' ";
		$userlist = $db->get_results($userlistquery);
		
		////// End of Code Started to Get All Suppliers List who have subscribed notification of enquiry in that particular country and category ////

		foreach ($userlist as $userinfo)
		{
			
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##your_site_name##','##site_login_url##','##my_account_url##','##username##','##project_name##','##project_link##');
				
				$replacearray=array(SITE_URL,SITE_TITLE,SITE_LOGIN_URL,SITE_LOGIN_URL,$userinfo->user_name,$enquirydata['enquiry_title'],$enquirydata['enquiry_url']);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
				$email_id = $userinfo->email_id;
			send_mail( $email_id , $mailsubject, $mailbody);
			
		}	
			
	}	
}
function cm_send_email_confirmation_notification_to_admin($emailid,$username)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(25);   ///////////// ID : 25 used for send new user admin email /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##my_account_url##','##site_login_url##','##your_site_name##','##username##','##username_email##','##user_password##');
				
				$replacearray=array(SITE_URL,SITE_LOGIN_URL,SITE_LOGIN_URL,SITE_TITLE,$username,$emailid,$password);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
			send_mail(REGISTRATIONADMINMAIL , $mailsubject, $mailbody);
	}		

}

function cm_send_email_notification_payment_completion_to_admin($data)
{
		$templateinfo=array();
		$templateinfo=getemailtemplateinfo(27);   ///////////// ID : 27 used for payment notification email to admin /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##your_site_name##','##site_login_url##','##my_account_url##','##username##','##email_id##','##transaction_id##','##amount##','##payment_status##');
				
				$replacearray=array(SITE_URL,SITE_TITLE,SITE_LOGIN_URL,SITE_LOGIN_URL,$data['user_name'],$data['email_id'],$data['transaction_id'],"$".$data['amount'],$data['status']);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
				
			send_mail(ACCOUNTADMINMAIL , $mailsubject, $mailbody);
	}
	
}

function cm_send_email_notification_payment_completion_to_user($data)
{
		$templateinfo=array();
		$templateinfo=getemailtemplateinfo(28);   ///////////// ID : 28 used for payment notification email to user /////////
	
	
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
					
				$findarray=array('##your_site_url##','##your_site_name##','##site_login_url##','##my_account_url##','##username##','##email_id##','##transaction_id##','##amount##','##payment_status##');
				
				$replacearray=array(SITE_URL,SITE_TITLE,SITE_LOGIN_URL,SITE_LOGIN_URL,$data['user_name'],$data['email_id'],$data['transaction_id'],"$".$data['amount'],$data['status']);
				
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
				
			send_mail($data['email_id'] , $mailsubject, $mailbody);
	}
	
}

function cm_send_new_buyer_confirmation_email($emailid,$username,$password,$activationurl)
{
				$templateinfo=array();
				$templateinfo=getemailtemplateinfo(29);   ///////////// ID : 29 used for send new buyer confirmation email /////////
	
	$activationlink = "<a href='".$activationurl."'>Click here</a>";
	if($templateinfo->status=='t') ////// Checking Email Template Status Active //////
	{
				$mailsubjecttemplate=$templateinfo->email_subject;
		
				$mailtemplate=$templateinfo->email_body;			
				
					
				$findarray=array('##your_site_url##','##site_login_url##','##your_site_name##','##username##','##username_email##','##user_password##','##confirmationurl##','##confirmationlink##');
				
				$replacearray=array(SITE_URL,SITE_LOGIN_URL,SITE_TITLE,$username,$emailid,$password,$activationurl,$activationlink);
				
				$mailsubject=str_replace($findarray,$replacearray,$mailsubjecttemplate);
				$mailbody=str_replace($findarray,$replacearray,$mailtemplate);
				$mailbody=nl2br($mailbody);
			send_mail($emailid , $mailsubject, $mailbody);
	}		

}
?>