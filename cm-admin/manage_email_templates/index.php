<?php require_once('../header.php');
require_once('module.php');
?>
			<!-- start: Content -->
			<div id="content" class="span10">
			<?php require_once("module_header.php");?>
			
			
			
			<?php if(isset($_SESSION['Message'])) { ?>
			<div class="row-fluid">		
					<div class="span11">
					<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<?php echo $_SESSION['Message'];
							unset($_SESSION['Message']);?>
						</div>
						</div>
				</div>
				<?php } ?>
				
			<div class="row-fluid sortable">		
				<div class="box span11">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span><?php echo MODULE_TITLE;?></h2>
						<div class="box-icon" >
						
							<a href="#" class="btn-setting" style="display:none; "><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					
					<?php
					/////////// Fetch data from database starts here /////////
					
				$results=$function->get_data_list(MODULE_TABLE_NAME);
				
					?>
					
					<div class="box-content">
						<table id="datainfo" class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr class="center">
							   							
								  <th class="center">Title</th>

								  <th class="center">Email Subject</th>
								 
								  <th class="center">Status</th>
								  <th class="center">Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						<?php foreach($results as $record)
				{?>  
						  
							<tr>
							<td><?php echo $record->title;?></td>
								
								<td><?php echo $record->email_subject;?></td>
								
								
								<td class="center">
								<?php if($record->status=="t") { ?>
									<span class="label label-success">Active</span>
									<?php }elseif($record->status=="f")
									{
									?>
									<span class="label label-important">De active</span>
									<?php
									}
									 ?>
								</td>
								<td class="center">
									<?php /*?><a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a><?php */?>
									<a class="btn btn-info" href="<?php echo BASE_ADMIN_URL;?><?php echo MODULE_SUB_LOCATION;?>/add_edit.php?id=<?php echo $record->id;?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									
								</td>
							</tr>
				<?php } ?>			
							
							
							
						  </tbody>
					  </table>            
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
	<script type="text/javascript">
	function delete_record(recordid)
	{
		 if (confirm("Confirm to delete this record?")) {	    
   document.location.href="delete.php?id="+recordid;
  } else {
    return false;
  }
	}
	</script>
	<div class="clearfix"></div>
	<?php require_once('../footer.php');?>
	