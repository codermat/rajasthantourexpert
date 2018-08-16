<?php require_once('header.php');
$dbquery = "SELECT * FROM ".GLOBAL_OPTIONS_TABLE."  ";
$results = $db->get_results($dbquery);

?>
			<!-- start: Content -->
			<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo BASE_ADMIN_URL;?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="<?php echo BASE_ADMIN_URL;?>options.php">Options</a></li>
			</ul>
			<?php if(isset($_SESSION['Message'])) { ?>
			<div class="row-fluid">		
					<div class="span12">
					<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<?php echo $_SESSION['Message'];
							unset($_SESSION['Message']);?>
						</div>
						</div>
				</div>
				<?php } ?>
				
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Options</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting" style="display:none; "><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" name="add_update_form" id="add_update_form" method="post" action="update_sliderimages.php">
						
						<?php 
						$imagearray=array();
			foreach($results as $record)
			{
				$imagearray[$record->option_name]=$record->option_value;
			}
						for($i=1;$i<=5;$i++)
						{
				?>  
						  <fieldset>
							<div class="control-group" style="border-bottom:1px solid #000; padding-bottom:5px;">
							  <label class="control-label" for="typeahead">Slider Image <?php echo $i;?>  </label>
							  <div class="controls">
								
								<input type="text"    name="slider_image_url_<?php echo $i;?>" value="<?php echo $imagearray['slider_image_url_'.$i];?>" id="slider_image_url_<?php echo $i;?>" class="span8"   />
								 <br>  Recommended Image Size : 1170px * 492px<br> <iframe name="mktlogoframe" id="upload_target" style="border: none; width:100%; height: 75px;" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="<?php echo BASE_ADMIN_URL;?>/upload/index.php?img=slider_image_url_<?php echo $i;?>&nonce=mktnonce" ></iframe>
 
   </div>
   
   <label class="control-label" for="typeahead">Slider Image Link <?php echo $i;?>  </label>
								  <div class="controls">
								<input type="text" name="slider_image_link_<?php echo $i;?>" value="<?php echo $imagearray['slider_image_link_'.$i];?>" id="slider_image_link_<?php echo $i;?>" class="span8"   />

								
							  </div>
							
							</div>
			<?php } ?>				
							
							
							
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Options</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div>
			
			
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	<script type="text/javascript">
	function show_pass()
	{
		if(document.getElementById('showpass').checked==true)
		{
			document.getElementById('user_pass').type="text";
		}else
		{
			document.getElementById('user_pass').type="password";
		}
	}
	</script>
	<?php require_once('footer.php');?>
	