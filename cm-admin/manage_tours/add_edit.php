<?php require_once('../header.php');
require_once('module.php');
if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
{
	$datainfo=$function->get_data_info(MODULE_TABLE_NAME,$_REQUEST['id'],'id');
}

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
						<?php } ?>
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Title*</label>
							  <div class="controls">
								<input type="text" name="title" required class="span7 typeahead" value="<?php if(isset($datainfo->title)) { echo $datainfo->title; } ?>" id="title" >
								
							  </div>
							</div>
							 <div class="control-group">
								<label class="control-label" for="selectError">Tour Packages*</label>
								<div class="controls">
								 	  <select id="tourpackageid" name="tourpackageid" required data-rel="chosen">
                                      <option value="">Select Tour Package</option>
								<?php
								$function->get_dropdown_list(GLOBAL_TOUR_PACKAGE_TABLE,"id","title",$datainfo->tourpackageid);
								?>
								  </select>
								</div>
							  </div>
						
							<div class="control-group">
							  <label class="control-label" for="typeahead">Meta tag Keywords</label>
							  <div class="controls">
								<textarea name="meta_tag_keywords" class="span7" rows="3"   id="meta_tag_keywords" ><?php  if(isset($datainfo->meta_tag_keywords)) {  echo $datainfo->meta_tag_keywords; } ?></textarea>
								
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Meta tag Descriptions</label>
							  <div class="controls">
								<textarea name="meta_tag_descriptions" class="span7" rows="3"   id="meta_tag_descriptions" ><?php  if(isset($datainfo->meta_tag_descriptions)) {  echo $datainfo->meta_tag_descriptions; } ?></textarea>
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Duration</label>
							  <div class="controls">
								<input type="text" name="duration" class="span7"    id="duration" value="<?php  if(isset($datainfo->duration)) {  echo $datainfo->duration; } ?>" >
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Destination</label>
							  <div class="controls">
									<input type="text" name="destination" class="span7" value="<?php  if(isset($datainfo->destination)) {  echo $datainfo->destination; } ?>"    id="destination" >
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Thumbnail Image</label>
							  <div class="controls">
								<input type="hidden"    name="featured_image" value="<?php  if(isset($datainfo->featured_image)) {  echo $datainfo->featured_image; } ?>" id="featured_image" class="span7"   />
								   <iframe name="mktlogoframe" id="upload_target" style="border: none; width:100%; height: 75px;" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="<?php echo BASE_ADMIN_URL;?>/upload/index.php?img=featured_image&nonce=mktnonce" ></iframe> (Recommended -> Width: 320px & Height: 211px;)
<?php if(isset($datainfo->featured_image) && $datainfo->featured_image!='') { ?>
								<img src="<?php echo SITE_URL;?>thumb.php?src=<?php echo $datainfo->featured_image;?>&w=80&h=80&q=90&zc=0" />
								<?php } ?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Short Desc. (500 char.)</label>
							  <div class="controls">
								
							<?php
$oFCKeditor = new FCKeditor('short_desc') ;
$oFCKeditor->BasePath= '../fckeditor/' ;
$oFCKeditor->Value=stripslashes($datainfo->short_desc);

$oFCKeditor->Create() ;
?>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Desc.</label>
							  <div class="controls">
								<?php
$oFCKeditor = new FCKeditor('desc') ;
$oFCKeditor->BasePath= '../fckeditor/' ;
$oFCKeditor->Value=stripslashes($datainfo->desc);

$oFCKeditor->Create() ;
?>
							  </div>
							</div>
								<div class="control-group">
							  <label class="control-label" for="typeahead">Tour Map Code.</label>
							  <div class="controls">
								<?php
$oFCKeditor = new FCKeditor('tour_map') ;
$oFCKeditor->BasePath= '../fckeditor/' ;
$oFCKeditor->Value=stripslashes($datainfo->tour_map);

$oFCKeditor->Create() ;
?>
							  </div>
							</div>
							<?php 
							if(isset($datainfo->other_images) && $datainfo->other_images!='')
							{
								$other_images= unserialize($datainfo->other_images);
							}else {
								$other_images=array();
							}
							for($i=0;$i<10;$i++) {?>
								<div class="control-group">
							  <label class="control-label" for="typeahead">Other Images <?php echo $i+1;?></label>
							  <div class="controls">
								<input type="text"    name="other_images[]" value="<?php  if(isset($other_images[$i])) {  echo $other_images[$i]; } ?>" id="other_images_<?php echo $i;?>" class="span7"   />
								   <iframe name="mktlogoframe" id="upload_target" style="border: none; width:100%; height: 75px;" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="<?php echo BASE_ADMIN_URL;?>/upload/index.php?img=other_images_<?php echo $i;?>&nonce=mktnonce" ></iframe> (Recommended -> Width: 1063px & Height: 400px;)
<?php if(isset($other_images[$i]) && $other_images[$i]!='') { ?>
								<img src="<?php echo SITE_URL;?>thumb.php?src=<?php echo $other_images[$i];?>&w=80&h=80&q=90&zc=0" />
								<?php } ?>
							  </div>
							</div>
								<?php } ?>

							  <div class="control-group">
								<label class="control-label" for="selectError">Status</label>
								<div class="controls">
								  <select id="status" name="status" data-rel="chosen">
								   <?php if(isset($datainfo->status)) { ?>								   
									<option value="t" <?php if($datainfo->status=='t') { echo "selected"; } ?>>Active</option>
									<option value="f" <?php if($datainfo->status=='f') { echo "selected"; } ?>>De active</option>
									 <?php }else { ?>
									 <option value="t"  selected>Active</option>
									<option value="f">De active</option>
									 <?php } ?>
									
								  </select>
								</div>
							  </div>
							

							          
							
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
	</script>
	<?php require_once('../footer.php');?>
	