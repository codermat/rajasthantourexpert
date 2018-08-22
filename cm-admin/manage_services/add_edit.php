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
							  <label class="control-label" for="typeahead">Title</label>
							  <div class="controls">
								<input type="text" name="title" required class="span7 typeahead" value="<?php if(isset($datainfo->title)) { echo $datainfo->title; } ?>" id="title" >
								
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Font Awesome Service Icon Class</label>
							  <div class="controls">
								<input type="text" name="service_icon" required class="span7 typeahead" value="<?php if(isset($datainfo->service_icon)) { echo $datainfo->service_icon; } ?>" id="service_icon" >
								
							  </div>
							</div>
							
							
							
							
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Service Desc.</label>
							  <div class="controls">
								<textarea name="service_desc" rows="10" class="cleditor span7"  id="service_desc" ><?php  if(isset($datainfo->service_desc)) {  echo $datainfo->service_desc; } ?></textarea>
								
							  </div>
							</div>
														
							<div class="control-group">
							  <label class="control-label" for="typeahead">Read More Link</label>
							  <div class="controls">
								<input type="text" name="read_more_link" required class="span7 typeahead" value="<?php if(isset($datainfo->read_more_link)) { echo $datainfo->read_more_link; } ?>" id="read_more_link" >
								
							  </div>
							</div>
							
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
	