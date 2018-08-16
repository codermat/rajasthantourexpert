<div id="sidebar-left" class="span2" >
				<div class="nav-collapse sidebar-nav" >
					<ul class="nav nav-tabs nav-stacked main-menu" >
						<li ><a href="<?php echo BASE_ADMIN_URL;?>"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
				<li <?php if(strstr($_SERVER['REQUEST_URI'],'manage_tour_packages/')) {?> class="active" <?php } ?>>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Manage Tour Packages</span><span class="label label-important"></span></a>
													<ul style="display:none;">
				<li <?php if(strstr($_SERVER['REQUEST_URI'],'manage_tour_packages/')) {?> class="active" <?php } ?> ><a href="<?php echo BASE_ADMIN_URL;?>manage_tour_packages"><i class="icon-tasks"></i><span class="hidden-tablet"> View Tour Packages </span></a></li>	
								
			
		</ul>	
		</li>
					<li <?php if(strstr($_SERVER['REQUEST_URI'],'manage_tours/')) {?> class="active" <?php } ?>>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Manage Tours</span><span class="label label-important"></span></a>
													<ul style="display:none;">
				<li <?php if(strstr($_SERVER['REQUEST_URI'],'manage_tours/')) {?> class="active" <?php } ?> ><a href="<?php echo BASE_ADMIN_URL;?>manage_tours"><i class="icon-tasks"></i><span class="hidden-tablet"> View Tours</span></a></li>	
								
		
		</ul>	
		</li>	
        	<li <?php if(strstr($_SERVER['REQUEST_URI'],'manage_testimonials/')) {?> class="active" <?php } ?> ><a href="<?php echo BASE_ADMIN_URL;?>manage_testimonials"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Manage Testimonials </span></a></li>
<li <?php if(strstr($_SERVER['REQUEST_URI'],'manage_email_templates/')) {?> class="active" <?php } ?>><a href="<?php echo BASE_ADMIN_URL;?>manage_email_templates"><i class="icon-list-alt"></i><span class="hidden-tablet"> Email Templates</span></a></li>																		
						<li <?php if(strstr($_SERVER['REQUEST_URI'],'manage_pages/')) {?> class="active" <?php } ?> ><a href="<?php echo BASE_ADMIN_URL;?>manage_pages"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Manage Pages </span></a></li>	
				<li <?php if(strstr($_SERVER['REQUEST_URI'],'manage_faq/')) {?> class="active" <?php } ?> ><a href="<?php echo BASE_ADMIN_URL;?>manage_faq"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Manage FAQ </span></a></li>
	<li <?php if(strstr($_SERVER['REQUEST_URI'],'manage_options/')) {?> class="active" <?php } ?> ><a href="<?php echo BASE_ADMIN_URL;?>manage_options"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Settings </span></a></li>						
					<li <?php if(strstr($_SERVER['REQUEST_URI'],'profile.php')) {?> class="active" <?php } ?>><a href="<?php echo BASE_ADMIN_URL;?>profile.php"><i class="icon-star"></i><span class="hidden-tablet"> Profile</span></a></li>
						
						<li> <a href="<?php echo BASE_ADMIN_URL;?>logout.php"><i class="icon-lock"></i><span class="hidden-tablet"> Logout</span></a></li>

						
					</ul>
				</div>
				</div>
			</div>