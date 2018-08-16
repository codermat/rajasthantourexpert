<?php require_once('header.php');
	$datainfo=$function->get_data_info(GLOBAL_USER_TABLE,$_SESSION['admin_userid'],'ID');


?>
			<!-- start: Content -->
			<div id="content" class="span10">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo BASE_ADMIN_URL;?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="<?php echo BASE_ADMIN_URL;?>profile.php">Profile</a></li>
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Profile</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting" style="display:none; "><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" name="add_update_form" id="add_update_form" method="post" action="updateprofile.php">
						
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Title <span class="required">*</span></label>
							  <div class="controls">
								<input type="text" name="user_title" id="user_title" placeholder="Title" required class="span6" value="<?php echo $datainfo->user_title;?>"    />
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Display Name <span class="required">*</span></label>
							  <div class="controls">
								<input type="text" name="user_nicename" id="user_nicename" placeholder="Title" required class="span6" value="<?php echo $datainfo->user_nicename;?>"    />
								
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email Address <span class="required">*</span></label>
							  <div class="controls">
								<input type="email"  name="user_email" id="user_email" placeholder="Email Address" required value="<?php echo $datainfo->user_email;?>"  class="span6"  />
								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Login ID <span class="required">*</span></label>
							  <div class="controls">
								<input type="text" name="user_login" id="user_login" placeholder="" required class="span6" value="<?php echo $datainfo->user_login;?>"    />
								
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="typeahead">Password<span class="required">*</span></label>
							  <div class="controls">
								<input type="password" name="user_pass" id="user_pass" required  value="<?php echo $function->cm_password_decryption($datainfo->user_pass);?>"  class="span6"  />
								Display Password:<input type="checkbox" name="showpass" id="showpass" onChange="show_pass()" >
							  </div>
							</div>  
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Profile</button>
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
	