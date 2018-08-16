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
						<form class="form-horizontal" name="add_update_form" id="add_update_form" method="post" action="updateoptions.php">
						
						<?php 
						
						foreach($results as $record)
						{
						$pos = strpos($record->option_name, "slider_image");
						if ($pos === false) {
						
				?>  
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead"><?php echo $record->title;?> </label>
							  <div class="controls">
								<?php if($record->type=="image") { ?>
								<input type="text"    name="<?php echo $record->option_name;?>" value="<?php echo $record->option_value;?>" id="<?php echo $record->option_name;?>" class="span8"   />
								   <iframe name="mktlogoframe" id="upload_target" style="border: none; width:100%; height: 75px;" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="<?php echo BASE_ADMIN_URL;?>/upload/index.php?img=<?php echo $record->option_name;?>&nonce=mktnonce" ></iframe>

								<?php }elseif($record->type=="textarea") { ?>
								<textarea  class="cleditor span6"  name="<?php echo $record->option_name;?>" id="<?php echo $record->option_name;?>"      ><?php echo stripslashes($record->option_value);?></textarea>
								<?php }else{ ?>
								<input type="text"    name="<?php echo $record->option_name;?>" value="<?php echo stripslashes($record->option_value);?>" id="<?php echo $record->option_name;?>" class="span8"   />

								<?php } ?>
							  </div>
							</div>
							<?php }    ///////// end of if of slider images
			
			}
			?>				
							
							
							
							
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
	