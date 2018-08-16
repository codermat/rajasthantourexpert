<footer>

		<p>
			<span style="text-align:left;float:left">&copy; <?php echo date("Y");?> <a href="<?php echo BASE_ADMIN_URL;?>" alt="<?php echo SITE_TITLE;?>"><?php echo SITE_TITLE;?> Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery-3.2.1.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/modernizr.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/bootstrap.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.cookie.js"></script>
	
		<script src='<?php echo BASE_ADMIN_URL;?>js/fullcalendar.min.js'></script>
	
		<script src='<?php echo BASE_ADMIN_URL;?>js/jquery.dataTables.min.js'></script>

		<script src="<?php echo BASE_ADMIN_URL;?>js/excanvas.js"></script>
	<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.flot.js"></script>
	<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.flot.pie.js"></script>
	<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.flot.stack.js"></script>
	<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.noty.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.raty.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/counter.js"></script>
	
		<script src="<?php echo BASE_ADMIN_URL;?>js/retina.js"></script>

		<script src="<?php echo BASE_ADMIN_URL;?>js/custom.js"></script>
	<!-- end: JavaScript-->
	
	<script type="text/javascript">
	$(document).ready( function() {   
	
	$('.datatable').dataTable({
			"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
			"sPaginationType": "bootstrap",
			 "aaSorting": [],
			"oLanguage": {
			"sLengthMenu": "_MENU_ records per page"
			}
		} );
})
	</script> 
</body>
</html>
