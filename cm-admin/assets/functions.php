<?php 
require_once(ROOTPATH.'Cart.php');

class cm_functions extends cm_db {

function create_password( $length = 8 ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    $password = substr( str_shuffle( $chars ), 0, $length );

    return $password;

	}
function is_login()
	{
		
		if(isset($_SESSION['admin_userid']) & isset($_SESSION['admin_userid']) & isset($_SESSION['admin_userid']))
		{
			return true;	
		}else
		{
			return false;
		}
		
	}
public function is_admin_login()
	{
		if(isset($_SESSION['admin_usertype']) && $_SESSION['admin_usertype'] == "administrator")
			return true;
		else
			return false;	
	}
function cm_redirect($url)
	{
		header('Location:'.$url);
		exit;
	}
function cm_password_encryption($password='')
	{
		$password=base64_encode(SECURITY_SALT.$password);
		return $password;
	}
function cm_password_decryption($password='')
	{
		$password=base64_decode($password);
		$password=trim($password,SECURITY_SALT);
		return $password;
	}	
	function cm_logout()
	{
		$_SESSION['admin_userid']='';
		$_SESSION['admin_username']='';
		$_SESSION['admin_usertype']='';
		unset($_SESSION['admin_userid']);
		unset($_SESSION['admin_username']);
		unset($_SESSION['admin_usertype']);
		session_destroy();				
	}	
	function set_login_session($userid,$username,$usertype)
	{
		$_SESSION['admin_userid']=$userid;
		$_SESSION['admin_username']=$username;
		$_SESSION['admin_usertype']=$usertype;	
	}
	function is_admin()
	{
			if(isset($_SESSION['admin_usertype']) && $_SESSION['admin_username']=='administrator')
			{
				return true;	
			}else
			{
				return false;	
			}
	}
	function seo_url($string,$addtimestamp=false){
	$string = preg_replace("`\[.*\]`U","",$string);
	$string = preg_replace('`&(amp;)?#?[a-z0-9]+;`i','-',$string);
	$string = htmlentities($string, ENT_COMPAT, 'utf-8');
	$string = preg_replace( "`&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);`i","\\1", $string );
	$string = preg_replace( "`\s`", "-", $string);
	$string = preg_replace( array("`[^a-z0-9-]`i") , "", $string);
	$string = preg_replace( array("`[-]+`") , "-", $string);
	if($addtimestamp==true)
	{
		$string =$string.'-'.strtotime(date('Y-m-d h:i:s'));
	}
	return strtolower(trim($string, '-'));
}
	
	function check_login($username,$password)
	{
		
		$password=$this->cm_password_encryption($password);
	
		$query="select ID,user_login,user_type from ".$this->tableprefix."users where user_login = '$username' and user_pass='$password' and user_status='t' ";
		$result = $this->get_results($query);
		if($result)
		{
			
			$userid= $result[0]->ID;
			$username=$result[0]->user_login;
			$usertype=$result[0]->user_type;			
			//$this->cm_dummy_login();
			$this->set_login_session($userid,$username,$usertype);
			return true;
		}else
		{
			return false;
		}
		
	}
	
	public function check_customer_exists($emailid)
	{
		$query = "select id from ".$this->tableprefix."customer where login_id = '".$emailid."'";
		$result = $this->get_var($query);
		if($result)
		{
			return true;
		}else
		{
			return false;
		}		
	}
	public function check_user_exists($tablename,$emailid,$excludefieldname='',$excludefieldvalue='')
	{
		if($excludefieldname!='')
		{
			$subquery=" and $excludefieldname !='".$excludefieldvalue."'";
		}else
		{
			$subquery="";
		}
		
		$query = "select id from $tablename where email_id = '".$emailid."' $subquery";
		$result = $this->get_var($query);
		if($result)
		{
			return true;
		}else
		{
			return false;
		}		
	}
	public function check_username_exists($tablename,$user_name,$excludefieldname='',$excludefieldvalue='')
	{
		if($excludefieldname!='')
		{
			$subquery=" and $excludefieldname !='".$excludefieldvalue."'";
		}else
		{
			$subquery="";
		}
		
		$query = "select id from $tablename where user_name = '".$user_name."' $subquery";
		$result = $this->get_var($query);
		if($result)
		{
			return true;
		}else
		{
			return false;
		}		
	}
	function login_user_info($userid)
	{
		$query="select * from ".$this->tableprefix."users where ID='$userid' ";
		$result = $this->get_results($query);	
		$output=$result[0];
		return $output;
	}
		function get_data_info($tablename,$conditionvalue,$conditionfield)
	{
		$query="select * from $tablename where $conditionfield='$conditionvalue'";
		
		$result = $this->get_results($query);	
		return $result[0];
		
	}
	function get_dropdown_list($tablename,$valuefield,$displayfield,$selectedvalue=0)
	{
		$query="select $valuefield,$displayfield from $tablename ";
		$results = $this->get_results($query);	
		foreach($results as $row)	
		{
			?><option value="<?php echo $row->$valuefield;?>" <?php if($row->$valuefield==$selectedvalue) { ?>selected="selected" <?php } ?> ><?php echo $row->$displayfield;?></option><?php	
		}
	
	}
	function get_data_list($tablename,$returnfield='',$conditionvalue='',$conditionfield='',$orderbyfield='id',$order='asc',$paged="",$noofrows="")
{
	if($returnfield=='')
	{
		$returnfield="*";	
	}
	
	if($conditionvalue!='' && $conditionfield!='')
	{
		$subquery="where $conditionfield='$conditionvalue'";
	}else
	{
		$subquery="";	
	}
	if($noofrows!="")
	{
		if($paged=="")
		{
			$paged=1;
		}
		$start=($paged-1)*$noofrows;
		$limitstring="LIMIT $start , $noofrows";
	}else
	{
		$limitstring="";
	}
	 $query="select $returnfield from $tablename $subquery order by $orderbyfield $order $limitstring ";

	$results = $this->get_results($query);
	return $results;	
}

function get_search_list($tablename,$returnfield='',$conditionvalue='',$conditionfield='',$orderbyfield='id',$order='asc',$paged="",$noofrows="")
{
	if($returnfield=='')
	{
		$returnfield="*";	
	}
	
	if($conditionvalue!='' && $conditionfield!='')
	{
		$subquery="where (title like '%$conditionvalue%' or meta_tag_keywords like '%$conditionvalue%' or $tablename.desc like '%$conditionvalue%'   )";
	}else
	{
		$subquery="";	
	}
	if($noofrows!="")
	{
		if($paged=="")
		{
			$paged=1;
		}
		$start=($paged-1)*$noofrows;
		$limitstring="LIMIT $start , $noofrows";
	}else
	{
		$limitstring="";
	}
	 $query="select $returnfield from $tablename $subquery order by $orderbyfield $order $limitstring ";
	
	$results = $this->get_results($query);
	return $results;	
}
function get_dropdown_list_conditional($tablename,$valuefield,$displayfield,$selectedvalue=0,$conditionalfield,$conditionvalue)
	{
		if($conditionalfield!='')
		{ 
			$subquery="where $conditionalfield='$conditionvalue'";
		}else
		{
			$subquery='';
		}
		  $query="select $valuefield,$displayfield from $tablename $subquery ";
		
		$results = $this->get_results($query);	
		foreach($results as $row)	
		{
			?><option value="<?php echo $row->$valuefield;?>" <?php if($row->$valuefield==$selectedvalue) { ?>selected="selected" <?php } ?> ><?php echo $row->$displayfield;?></option><?php	
		}
	
	}
public function set_option($option_key,$option_value)
	{
		
		if($this->check_option_exists($option_key))
		{
			$query = "update ".$this->tableprefix."options 
						set option_value = '".$option_value."' WHERE option_key = '".$option_key."'";
			$this->query($query);
		}else
		{
			$query = "insert into ".$this->tableprefix."options 
						set option_key = '".$option_key."',option_value = '".$option_value."'";
			$this->query($query);
		}	
		if($this->error)
			return false;
		else
			return true;	
	}
	
	public function check_option_exists($option_key)
	{
		$query = "select option_key from ".$this->tableprefix."options where option_key = '".$option_key."'";
		$result = $this->get_var($query);
		if($this->error)
			return $this->error;
		else	
			return $result;
		
	}
	
	public function get_option($option_key)
	{
		$query = "select option_value from ".$this->tableprefix."options where option_name = '".$option_key."'";
		$result = $this->get_var($query);
		if($this->error)
			return $this->error;
		else	
			return stripslashes($result);
		
	}
	public function get_options()
	{
		$query = "select option_name,option_value from ".$this->tableprefix."options ";
		$results = $this->get_results($query);
		foreach($results as $row)	
		{
			$options[$row->option_name]=stripslashes($row->option_value);
		}	
		return $options;
		
	}
	public function get_template($filename)
	{
		 global $options;
		require_once("templates/$filename".".php");
	}
	public function create_category_dropdown()
	{
		$query = "select id,pcatid,title,seo_url from ".GLOBAL_CATEGORY_TABLE." where status='t' ";
		$results = $this->get_results($query);
		$category = array(
            'categories' => array(),
            'parent_cats' => array()
        );
		
		
	}
	public function get_seo_url($seo_slug,$type='')
	{
		if($type=='')
		{
			$output=SITE_URL.$seo_slug.SEO_SUFFIX;
		}
		return $output;
	}
	public  function object_to_array($data)
	{
		if (is_array($data) || is_object($data))
		{
			$result = array();
			foreach ($data as $key => $value)
			{
				$result[$key] = $this->object_to_array($value);
			}
			return $result;
		}
		return $data;
	}
	function arraytodropdown($array,$selectedvalue='')
{
	//print_r($array);
	for($f=0;$f<count($array);$f++)
	{
		?><option value="<?php echo $array[$f];?>" <?php if($array[$f]==$selectedvalue) { ?>selected="selected" <?php } ?> ><?php echo $array[$f];?></option><?php	
	}		
}
	
	

function check_customer_login($loginid,$password)
	{
		
		 $password=$this->cm_password_encryption($password);
		 $query="select * from ".$this->tableprefix."customer where email_id = '$loginid' and password='$password' and status='t' ";
		
		$result = $this->get_results($query);
	
		if($result)
		{			
			if($result[0]->email_confirmed=='f')
			{
				$_SESSION['message']="<div class='alert alert-warning'><span style='color:#b94a48'>Your email id is not confirmed. Please confirm your email id.</span></div>";
				return false;
			}else
			{	
				$_SESSION['cm_customer_login']=true;
				$_SESSION['customer_info']=$result[0];
				return true;
			}
			
		}else
		{
			$_SESSION['message']="<div class='alert alert-warning'><span style='color:#009900'>Oops! The login details you entered were incorrect. Please enter correct login id and password.</span></div>";

			return false;
		}
		
	}
	
	function updateprofile($profileinfo)
	{		 	
		 	$data['first_name']=escape_value($profileinfo['first_name']);			
			$data['last_name']=escape_value($profileinfo['last_name']);			
			$data['phone']=escape_value($profileinfo['phone']);			
			$data['address_1']=escape_value($profileinfo['address_1']);
			$data['address_2']=escape_value($profileinfo['address_2']);			
			$data['city']=escape_value($profileinfo['city']);
			$data['state']=escape_value($profileinfo['state']);
			$data['country']=escape_value($profileinfo['country']);
			$data['postal_code']=escape_value($profileinfo['postal_code']);			
			
			$loginid=$_SESSION['customer_info']->login_id;
		 	$where['login_id']=$loginid;
			$this->update( GLOBAL_CUSTOMER_TABLE, $data,$where ) ;
			
			$query="select * from ".$this->tableprefix."customer where login_id = '$loginid' ";
			
			$result = $this->get_results($query);
			
			if($result)
			{
				$_SESSION['customer_info']=$result[0];
			}
			$_SESSION['message']="<div class='alert alert-warning'><span style='color:#009900'>Profile updated successfully.</span></div>";

		
	}
	
	
	
}
$function = new cm_functions; 
if(isset($_REQUEST['action']) && $_REQUEST['action']=='logout')
{
	$function ->cm_logout();
}
///////////// Other Function Used in system ///////////////
function get_pagination($baseurl='',$NoOfRecords='',$limit,$paged)
{
$totalrecords=count($NoOfRecords);
$totalpages = 0;
					
$totalpages = ceil($totalrecords/$limit);

$pagination='<div class="pager_wrapper">
    <ul class="pager clearfix">';
	if($paged==1)
	{		
		$previouslink='<li class="prev disabled">
     <a class="page-link" href="javascript:void();" tabindex="-1"><i class="fa fa-angle-left"></i>Previous</a>
    </li>';
	
	}else
	{		
		$previouslink='<li class="prev">
      <a class="page-link" href="'.$baseurl.($paged-1).SEO_SUFFIX.'" tabindex="-1"><i class="fa fa-angle-left"></i>Previous</a>
    </li>';
	
	}
	if($paged==$totalpages)
	{
		
		 $nextlink='
    <li class="next disabled">
      <a class="page-link" href="javascript:void();">Next<i class="fa fa-angle-right"></i></a>
    </li>';
	
	}else
	{
		 $nextlink='
    <li class="next">
      <a class="page-link" href="'.$baseurl.($paged+1).SEO_SUFFIX.'">Next<i class="fa fa-angle-right"></i></a>
    </li>';
	}
	$pagination.=$previouslink;
	if($paged>4)
	{
		for($counter=1;$counter<3;$counter++)
		{
			
						
					$pagination.=' <li class="page-item"><a class="page-link" href="'.$baseurl.$counter.SEO_SUFFIX.'">'.$counter.'</a></li>';
							
		}
	}
	
	
if($paged>5)
{
	$pagination.='<li class="page-item"><a class="page-link"> ..... </a> </li>';
}
	for($counter=1;$counter<=$totalpages;$counter++)
	{
		if($counter<=$paged+2 && $counter>=$paged-2 )
		{
			if($paged==$counter)
			{			
				$pagination.=' <li class="page-item active"><a class="page-link" href="'.$baseurl.$counter.SEO_SUFFIX.'">'.$counter.' <span class="sr-only">(current)</span></a></li>';
			}else
			{			
				$pagination.=' <li class="page-item"><a class="page-link" href="'.$baseurl.$counter.SEO_SUFFIX.'">'.$counter.'</a></li>';
			}
		}
   	}
	if($totalpages>2 && $paged<$totalpages-2 )
	{
		$pagination.='<li class="page-item"><a class="page-link"> .....</a> </li>';
	}
	//$totalpages
	//$paged
	/*
	if($totalpages>2 && $paged<$totalpages-2 )
	{
		$pagination.='<li class="page-item"><a class="page-link"> .....</a> </li>';
	}
	if($paged<$totalpages-2)
	{
		for($counter=$totalpages-2;$counter<=$totalpages;$counter++)
		{
			
						
					$pagination.=' <li class="page-item"><a class="page-link" href="'.$baseurl.$counter.SEO_SUFFIX.'">'.$counter.'</a></li>';
							
		}
	} */
	$pagination.=$nextlink;
 $pagination.='</ul>
</div>';
if($totalrecords>0)
{
	return $pagination;
}else
{
	return false;
}
}

function gifti_pagination($baseurl='',$NoOfRecords='',$limit,$paged)
{
		//$totalrecords=count($NoOfRecords);
		$totalrecords = $NoOfRecords;
$totalpages = 0;
				if($limit=='all')
				{
						$totalpages =1;
				}else
				{					
					$totalpages = ceil($totalrecords/$limit);
				}
$pagination='<div class="pages_prev_next">
                  <ul class="pager">';
	if($paged==1)
	{		
		$previouslink='<li class="disabled">
     <a  href="javascript:void();" tabindex="-1">Previous</a>
    </li>';
	
	}else
	{		
		$previouslink='<li >
      <a  href="'.$baseurl.'&paged='.($paged-1).'" tabindex="-1">Previous</a>
    </li>';
	
	}
	if($paged==$totalpages)
	{
		
		 $nextlink='
    <li class=" disabled">
      <a  href="javascript:void();">Next</a>
    </li>';
	
	}else
	{
		 $nextlink='
    <li >
      <a  href="'.$baseurl.'&paged='.($paged+1).'">Next</a>
    </li>';
	}
	$pagination.=$previouslink;
	if($paged>4)
	{
		for($counter=1;$counter<3;$counter++)
		{
			
						
					$pagination.=' <li ><a  href="'.$baseurl.'&paged='.$counter.'">'.$counter.'</a></li>';
							
		}
	}
	
	
if($paged>5)
{
	$pagination.='<li ><a> ..... </a> </li>';
}
	for($counter=1;$counter<=$totalpages;$counter++)
	{
		if($counter<=$paged+2 && $counter>=$paged-2 )
		{
			if($paged==$counter)
			{			
				$pagination.=' <li class="active"><a  href="'.$baseurl.'&paged='.$counter.'">'.$counter.' <span class="sr-only">(current)</span></a></li>';
			}else
			{			
				$pagination.=' <li ><a  href="'.$baseurl.'&paged='.$counter.'">'.$counter.'</a></li>';
			}
		}
   	}
	if($totalpages>2 && $paged<$totalpages-2 )
	{
		$pagination.='<li ><a > .....</a> </li>';
	}
	//$totalpages
	//$paged
	/*
	if($totalpages>2 && $paged<$totalpages-2 )
	{
		$pagination.='<li class="page-item"><a class="page-link"> .....</a> </li>';
	}
	if($paged<$totalpages-2)
	{
		for($counter=$totalpages-2;$counter<=$totalpages;$counter++)
		{
			
						
					$pagination.=' <li class="page-item"><a class="page-link" href="'.$baseurl.$counter.SEO_SUFFIX.'">'.$counter.'</a></li>';
							
		}
	} */
	$pagination.=$nextlink;
 $pagination.='</ul>
</div>';
if($totalrecords>0)
{
	return $pagination;
}else
{
	return false;
}
	
}
function gifti_pagination_2($baseurl='',$NoOfRecords='',$limit,$paged)
{
		//$totalrecords=count($NoOfRecords);
		$totalrecords = $NoOfRecords;
$totalpages = 0;
					
$totalpages = ceil($totalrecords/$limit);

$pagination='<div class="pages_prev_next">
                  <ul class="pager">';
	if($paged==1)
	{		
		$previouslink='<li class="disabled">
     <a  href="javascript:void();" tabindex="-1">Previous</a>
    </li>';
	
	}else
	{		
		$previouslink='<li >
      <a  href="'.$baseurl.'&paged='.($paged-1).'" tabindex="-1">Previous</a>
    </li>';
	
	}
	if($paged==$totalpages)
	{
		
		 $nextlink='
    <li class=" disabled">
      <a  href="javascript:void();">Next</a>
    </li>';
	
	}else
	{
		 $nextlink='
    <li >
      <a  href="'.$baseurl.'&paged='.($paged+1).'">Next</a>
    </li>';
	}
	$pagination.=$previouslink;
	if($paged>4)
	{
		for($counter=1;$counter<3;$counter++)
		{
			
						
					$pagination.=' <li ><a  href="'.$baseurl.'&paged='.$counter.'">'.$counter.'</a></li>';
							
		}
	}
	
	
if($paged>5)
{
	$pagination.='<li ><a> ..... </a> </li>';
}
	for($counter=1;$counter<=$totalpages;$counter++)
	{
		if($counter<=$paged+2 && $counter>=$paged-2 )
		{
			if($paged==$counter)
			{			
				$pagination.=' <li class="active"><a  href="'.$baseurl.'&paged='.$counter.'">'.$counter.' <span class="sr-only">(current)</span></a></li>';
			}else
			{			
				$pagination.=' <li ><a  href="'.$baseurl.'&paged='.$counter.'">'.$counter.'</a></li>';
			}
		}
   	}
	if($totalpages>2 && $paged<$totalpages-2 )
	{
		$pagination.='<li ><a > .....</a> </li>';
	}
	//$totalpages
	//$paged
	/*
	if($totalpages>2 && $paged<$totalpages-2 )
	{
		$pagination.='<li class="page-item"><a class="page-link"> .....</a> </li>';
	}
	if($paged<$totalpages-2)
	{
		for($counter=$totalpages-2;$counter<=$totalpages;$counter++)
		{
			
						
					$pagination.=' <li class="page-item"><a class="page-link" href="'.$baseurl.$counter.SEO_SUFFIX.'">'.$counter.'</a></li>';
							
		}
	} */
	$pagination.=$nextlink;
 $pagination.='</ul>
</div>';
if($totalrecords>0)
{
	return $pagination;
}else
{
	return false;
}
	
}

function send_product_enquiry()
{
			$db= new cm_db;
			
			$data['user_name']=escape_value($_POST['user_name']);			
			$data['user_email']=escape_value($_POST['user_email']);	
			$data['user_contact']=escape_value($_POST['user_contact']);		
			$data['subject']=escape_value($_POST['subject']);		
			$data['message']=escape_value($_POST['message']);	
			$data['dateadded']=time();					
			
		$db->insert(GLOBAL_ENQUIRY_TABLE, $data) ;
		$userid=$db->insert_id;
		$_SESSION['customer_info']->id=$userid;
		$orderid=save_order();
		global $function;
			$orderdetails=$function->get_order_details($userid,$orderid);
		///////// Admin Mail Code Starts here /////////
			$date=date("M d, Y");
			$admin_mailsubject=MAILFROMNAME.": New Customer Enquiry(".$orderid.") ".$date;
			
				$enquirytemplate=getmailtemplate("product_enquiry");				
					
				$findarray=array('#USER_NAME#','#CART#','#SUBJECT#','#USER_EMAIL#','#CONTACT_NUMBER#','#MESSAGE#');
				
				$replacearray=array( $data['user_name'],
				$orderdetails,
				$data['subject'],
				$data['user_email'],
				$data['user_contact'],
				$data['message'] );
				
				$admin_mailbody=str_replace($findarray,$replacearray,$enquirytemplate);	
	
			send_mail(NOTIFYMAIL , $admin_mailsubject, $admin_mailbody);
			///////// Admin Mail Code Ends here //////////
			$cart = new Cart;
			$cart->destroy();
}


function getmailtemplate($template)
{
	ob_start();
	include('email_template/'.$template.'.tpl');
	$ob = ob_get_clean();
	$mailtemplate=$ob;
	return $mailtemplate;
}
function escape_value($sql)
{
	$magic_quotes_active = get_magic_quotes_gpc();
	$real_escape_string_exists = function_exists('mysql_real_escape_string');
 
	if ($real_escape_string_exists)
		{
			if($magic_quotes_active)
			{
				$sql = stripslashes($sql);
			}
		$sql = mysql_real_escape_string($sql);
	    }else
	    {
			if(!$magic_quotes_active)
			{
				$sql = addslashes($sql);
			}
	    }
		return $sql;
}
function cleanInput($input) {
	$search = array(
		'@<script[^>]*?>.*?</script>@si',   // Strip out javascript 
		'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
		'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
		'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
	);
	$output = preg_replace($search, '', $input);
	return $output;
}
function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
		 $input = htmlentities($input);
		   $input = stripslashes($input);
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return $output;
}
function get_price($price)
{
	$price=number_format($price,'2','.',',');
	//return $price." /-INR";
	return GLOBAL_CURRENCY_CODE.$price;
}
 if(!strstr($_SERVER['REQUEST_URI'],'cm-admin/') )
{
	 
	
		if(!isset($_REQUEST['form_action']))
		{
			if(isset($_REQUEST))
			{
				$_REQUEST = sanitize($_REQUEST);
			}
			if(isset($_POST))
			{
				$_POST = sanitize($_POST);
			}
			if(isset($_GET))
			{
				$_GET = sanitize($_GET);
			}
		}	
		
}
/////// End of function used in system ////////////


?>