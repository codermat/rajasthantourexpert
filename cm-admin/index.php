<?php require_once('header.php');?>
			<!-- start: Content -->
			<div id="content" class="span10" style="min-height:750px;">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo BASE_ADMIN_URL;?>">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="<?php echo BASE_ADMIN_URL;?>">Dashboard</a></li>
			</ul>
			
			
			<?php  
			
			echo "Welcome to you ";//require_once('dashboard.content.php');?>
			
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
	<?php require_once('footer.php');?>
	