<?php
global $General;
$load = '../assets/load.php';
if (file_exists($load)){  //if it's >WP-2.6
  require_once($load);
  }
  else {
  echo 'Error: Config file not found';exit;
 }
 
 
 

      $result = 0;
   $name = time().'_'.$_FILES['myfile']['name'];
   $name = strtolower($name);
   $name=str_replace(" ","-",$name);
  $filearray=explode(".",$name);

 
  $extension=$filearray[count($filearray)-1];
  if($extension=="png" || $extension=="gif" || $extension=="jpg" || $extension=="jpeg" || $extension=="tif" || $extension=="bmp" )
  {
  		$user_path = SITE_URL."uploads/".date("m-y")."/".$name;
		//$target_path="../students_image/".date("m"). $name;
		$target_path_folder="../../uploads/".date("m-y")."/";
		 if (!file_exists($target_path_folder)){
					  mkdir($target_path_folder, 0777);
				  }     
				 $target_path =$target_path_folder. $name;
		if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path))
		{
		  $result = 1;
		  //if true, good; if false, zip creation failed
		}
		sleep(1);
		 $imgNumb = "image".$_GET['img'];
   
   list($width, $height) = getimagesize($user_path);
   ?>
   <script language="javascript" type="text/javascript">window.parent.window.noUpload(<?php echo $result.", '".$user_path."', '".$_GET['img']."', '".$width."', '".$height."' "; ?>);</script>
   <?php 
    } else
	{
	?>
	<script type="text/javascript">
	 window.parent.window.uploaderror();
	</script>
	<?php
	}
   /* creates a compressed zip file */
  
?>
