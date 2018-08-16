<?php
$load = '../assets/load.php';
if (file_exists($load)){  //if it's >WP-2.6
  require_once($load);
  }
  else {
 echo 'Error: Config file not found';exit;
 }

$action = $_GET['img']; 
?><head>
  
   <link href="style/style.css" rel="stylesheet" type="text/css" />
   
<script language="javascript" type="text/javascript">
<!--
function toggle(o){
var e = document.getElementById(o);
e.style.display = (e.style.display == 'none') ? 'block' : 'none';
}

function goform()
{
	  if(document.forms.ajaxupload.myfile.value==""){
	  alert('Please choose an image');
	  return;
	  }

  document.ajaxupload.submit();
}
function goUpload(){

	  if(document.forms.ajaxupload.myfile.value==""){
	  return;
	  }

	  	
      document.getElementById('f1_upload_process').style.visibility = 'visible';
	  document.getElementById('f1_upload_process').style.display = '';
	  document.getElementById('f1_upload_success').style.display = 'none';
      //document.getElementById('f1_upload_form').style.visibility = 'hidden';
      return true;
}

function noUpload(success, path, imgNumb){
      var result = '';
      if (success == 1){
         document.getElementById('f1_upload_process').style.display = 'none';
		  var theImage = parent.document.getElementById(imgNumb);
		   theImage.value = path;
		   document.getElementById('myfile').value = '';
		   document.getElementById('f1_upload_success').style.display = '';
		   
          //parent.toggle(imgNumb + "_div");
         // parent.reloadFrame(imgNumb + "frame");
         // document.getElementById('f1_upload_form').style.display = 'none';  
          }
      else { 
          document.getElementById('f1_upload_process').style.display = 'none';
		  document.getElementById('f1_upload_form').style.display = 'none'; 
          document.getElementById('no_upload_form').style.display = '';
      }
      return true;     
}
function uploaderror()
{
	alert("Only jpg, jpeg, png, gif, tif, bmp image format is allowed to upload.");
	document.getElementById('f1_upload_process').style.display = 'none';
}
//-->
</script>   
</head>



<style>

#upload_target
{
	 width:				100%;
	 height:			80px;
	 text-align: 		center;
	 border:			none;
	 background-color: 	#642864;	
	 margin:			0px auto;
}

</style>

 


<body>
                <form name="ajaxupload" action="<?php echo "upload.php?img=".$action."&nonce=".$_GET['nonce']; ?>" method="post" enctype="multipart/form-data" target="upload_target" onSubmit="goUpload();" >
                     <p id="f1_upload_process" style="margin-top: 20px;">Uploading Please wait ...<br/><img src="loader.gif" /><br/></p>
                      <div id="f1_upload_form" align="left"><!--Select Image You want to upload:-->
                         <table border="0" cellpadding="0" cellspacing="0"><tr><td><label><input name="myfile" id="myfile" class="textboxStyled" type="file" size="50" onChange="goform();goUpload();" tabindex="2" /></label>
                         <p id="f1_upload_success" style="display:none;font-size:11px">Uploaded Successfully<br></p>
                         </td><td><!--<a href="javascript: goform()" onClick="goUpload();" tabindex="2"><input type="button"; name="Upload" value="Upload"></a>--></td></tr></table>
                     </div>
                     
                     <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0; border:0; background:#fff;" ></iframe>
                 </form>
                 <div id="yesupload" style="display: none;"><center><?php echo "Image Uploaded Successfully"; ?></br><a href="#" onlcick="reload(<?php echo $_GET['img']; ?>)"><?php echo "Please upload another image"; ?></a></center></div>
             
</body>   