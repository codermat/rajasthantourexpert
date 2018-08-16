<?php require_once('../header.php');
require_once('module.php');
if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
{
	$datainfo=$function->get_data_info(MODULE_TABLE_NAME,$_REQUEST['id'],'id');
}


$sociallinks=array();
$sociallinks[]="Facebook";
$sociallinks[]="Twitter";
$sociallinks[]="Pin Interest";
$sociallinks[]="LinkedIn";
$sociallinks[]="Google Plus";
$sociallinks[]="Tumbler";
$sociallinks[]="Instagram";
$sociallinks[]="Youtube";
$sociallinks[]="RSS Feed";
?>
			<!-- start: Content -->
			<div id="content" class="span10">
			
			<?php require_once("module_header.php");?>
						
			<div class="row-fluid sortable">
				<div class="box span11">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span><?php if(isset($_REQUEST['id']) && $_REQUEST['id']!='') { echo MODULE_EDIT_LABEL; }else { echo MODULE_ADD_LABEL; } ?></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting" style="display:none; "><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" name="add_update_form" id="add_update_form" method="post" action="save.php">
						<?php if(isset($_REQUEST['id']) && $_REQUEST['id']!='') { ?>
						<input type="hidden" name="id" value="<?php echo $datainfo->id;?>">
						<input type="hidden" name="option_name" value="<?php echo $datainfo->option_name;?>">
						<input type="hidden" name="type" value="<?php echo $datainfo->type;?>">
						<?php } ?>
					
						  <fieldset>
							
							
								<div class="control-group">
							  <label class="control-label" for="typeahead"></label>
							  <div class="controls">
								&nbsp;
							  </div>
							   </div>
								<div class="control-group">
							  <label class="control-label" for="typeahead"></label>
							  <div class="controls">
								&nbsp;
							  </div>
							 </div>
							 	
							<div class="control-group">
							  <label class="control-label" for="typeahead"><?php if(isset($datainfo->title)) { echo $datainfo->title; } ?></label>
							  <div class="controls">
							  
							  <?php if($datainfo->type=='textarea') { ?>
							  
								<textarea name="option_value" class="span7" rows="3"  required id="option_value" ><?php  if(isset($datainfo->option_value)) {  echo stripslashes($datainfo->option_value); } ?></textarea>
							 
							 <?php }elseif($datainfo->type=='text')
							 {?>
							 <input type="text" name="option_value" value="<?php  if(isset($datainfo->option_value)) {  echo stripslashes($datainfo->option_value); } ?>" class="span7" rows="3"  required id="option_value" >
							 
							 <?php
							 }elseif($datainfo->type=='radio')
							 {?>
							 <label class="radio"> <input type="radio" name="option_value" <?php if($datainfo->option_value=='t') { ?> checked <?php } ?> value='t' >Yes  </label> <label class="radio"><input type="radio" name="option_value" <?php if($datainfo->option_value=='f') { ?> checked <?php } ?>  value='f' >No</label>
							 <?php
							 }elseif($datainfo->type=='image')
							 {?>
							 <input type="hidden"    name="option_value" value="<?php  if(isset($datainfo->option_value)) {  echo $datainfo->option_value; } ?>" id="option_value" class="span7"   />
								   <iframe name="mktlogoframe" id="upload_target" style="border: none; width:100%; height: 75px;" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="<?php echo BASE_ADMIN_URL;?>/upload/index.php?img=option_value&nonce=mktnonce" ></iframe>
								<?php if($datainfo->option_value!="") { ?>
							<div id="imagecontainer">	<img src="<?php echo $datainfo->option_value;?>" width="100" height="100" >
								<a href="javascript:void();" onClick="deleteimage();">Delete</a></div>
								<?php } ?>
							 <?php
							 }?>
													 
							 </div>
							</div>
							
<?php if($datainfo->type=='imageads') { 
$adsinfo=unserialize($datainfo->option_value);
//echo "<pre>";
//print_r($adsinfo);
//exit;
?>


	<div class="control-group">
							  <label class="control-label" for="typeahead">Add Image  : </label>
							  <div class="controls">
							 <input type="hidden"    name="option_value[image]" value="<?php  if(isset($adsinfo[image])) {  echo $adsinfo[image]; } ?>" id="option_value" class="span7"   />
								   <iframe name="mktlogoframe1" id="upload_target1" class="span7" style="border: none;height: 75px;" src="<?php echo BASE_ADMIN_URL;?>/upload/index.php?img=option_value&nonce=mktnonce" ></iframe>
								<?php if($datainfo->option_value!="") { ?>
							<div id="imageadscontainer">	<img src="<?php echo $adsinfo[image];?>" width="100" height="100" >
								<a href="javascript:void();" onClick="deleteadsimage();">Delete</a></div>
							<?php } ?>
							  </div>
							   </div>
							   	<div class="control-group">
							  <label class="control-label" for="typeahead">Image <?php echo $i;?> Link URL  : </label>
							  <div class="controls">
							 <input type="text"    name="option_value[link]" value="<?php echo $adsinfo[link];?>"  class="span7"   />
								
							  </div>
							   </div>
							   
<?php } ?>
							
							
							
							<?php if($datainfo->option_name=="social_media") { 
							$socialinfo=unserialize($datainfo->option_value);
													
							foreach($sociallinks as $sociallink) { ?>
								<div class="control-group">
							  <label class="control-label" for="typeahead"><?php echo $sociallink;?> Links</label>
							  <div class="controls">
								<input type="text" name="option_value[<?php echo $sociallink;?>]" class="span7" rows="3"  value="<?php echo $socialinfo[$sociallink];?>">
							  </div>
							   </div>
							<?php }
							} 
							?>
							
							
							<?php if($datainfo->option_name=="slider_images") {

									$max = $function->get_option('max_slider_image'); 
									$sliderimagesfull=array();
									$sliderimagesfull=unserialize($datainfo->option_value);
									
									$sliderimages=array_filter($sliderimagesfull);
									//print_r($sliderimages);
									for($i=1;$i<=$max;$i++) {
									//if($sliderimages[$i-1]!='')
									{
									?>
								<div class="control-group">
							  <label class="control-label" for="typeahead">Add Slider Image <?php echo $i;?> : </label>
							  <div class="controls">
							 <input type="hidden"    name="option_value[image][]" value="<?php echo $sliderimages['image'][$i-1];?>" id="option_value_<?php echo $i;?>" class="span7"   />
								   <iframe name="mktlogoframe" id="upload_target" style="border: none; width:100%; height: 75px;" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="<?php echo BASE_ADMIN_URL;?>/upload/index.php?img=option_value_<?php echo $i;?>&nonce=mktnonce" ></iframe>
								<?php if($sliderimages['image'][$i-1]!="") { ?>
							<div id="imagecontainer_<?php echo $i;?>">	<img src="<?php echo $sliderimages['image'][$i-1];?>" width="100" height="100" >
								<a href="javascript:void();" onClick="deletesliderimage(<?php echo $i;?>);">Delete</a></div>
							
							<?php } ?>
							  </div>
							   </div>
							   	<div class="control-group">
							  <label class="control-label" for="typeahead">Image <?php echo $i;?> Link URL  : </label>
							  <div class="controls">
							 <input type="text"    name="option_value[link][]" value="<?php echo $sliderimages['link'][$i-1];?>"  class="span7"   />
								
							  </div>
							   </div>
							<?php 
									}
									}
							} ?>
																			
						

							          
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
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
	function deleteimage()
	{
		document.getElementById('imagecontainer').style.display="none";
		document.getElementById('option_value').value="";
		
	}
	function deleteadsimage()
	{
		
		document.getElementById('imageadscontainer').style.display="none";
		document.getElementById('option_value').value="";
		
	}
	function deletesliderimage(sliderid)
	{
		document.getElementById('imagecontainer_'+sliderid).style.display="none";
		document.getElementById('option_value_'+sliderid).value="";
		
	}
	</script>
	<?php require_once('../footer.php');?>
	