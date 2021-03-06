
<div class="bot1_wrapper">

  <div class="container">
    <div class="row">
      
      <div class="col-sm-3">

        <div class="bot1_title">USEFUL LINKS</div>

        <ul class="ul1">
<li><a href="{$siteurl}">HOME</a></li>
   {if $pagelist[1].title != ''} 
<li><a href="{$siteurl}{$pagelist[1].seo_url}{$url_suffix}">{$pagelist[1].title}</a></li>
{/if}
<li><a href="{$siteurl}testimonials{$url_suffix}">Testimonials</a></li>
 <li><a href="{$siteurl}blog{$url_suffix}">Blog</a></li>
  <li><a href="{$siteurl}tour-packages{$url_suffix}">Tour Packages</a></li>
  <li><a href="{$siteurl}destinations{$url_suffix}">Destinations</a></li>
       {if $pagelist[5].title != ''} 
           	 <li><a href="{$siteurl}{$pagelist[5].seo_url}{$url_suffix}" style="display:none;">{$pagelist[5].title}</a></li>
             {/if}
   {if $pagelist[4].title != ''} 
<li><a href="{$siteurl}{$pagelist[4].seo_url}{$url_suffix}">{$pagelist[4].title}</a></li>
{/if}
        </ul>
      </div>
      <div class="col-sm-3">

        <div class="bot1_title">TOUR PACKAGES</div>

        <ul class="ul1">
		 {foreach from=$footertourpackagelist key=footertourpackagekey item=footertourpackageinfo name=footertourpackageid}
          <li><a href="{$siteurl}tour-packages/{$footertourpackageinfo.seo_url}{$url_suffix}">{$footertourpackageinfo.title}</a></li>
		   {/foreach}  

        </ul>
		
		
		
      </div>
	  <div class="col-sm-3">

        <div class="bot1_title">TOURIST DESTINATIONS</div>

        <ul class="ul1">
		 {foreach from=$footerdestinationslist key=footerdestinationkey item=footerdestinationinfo name=footerdestinationid}
          <li><a href="{$siteurl}destinations/{$footerdestinationinfo.seo_url}{$url_suffix}">{$footerdestinationinfo.title}</a></li>
		   {/foreach}  

        </ul>
      </div>
      <div class="col-sm-3">

        <div class="logo2_wrapper">
       {if $options.footer_logo!=''}
	     <div>
            <img src="{$options.footer_logo}" class="img-responsive"> </div>
			{else}
			 <div>
            <img src="{$templateurl}images/logo2.png" class="img-responsive"> </div>
			
			{/if}
			<div class="topdiv">
			{if $options.address!=''}
			<strong>Address :</strong> {$options.address}
{/if}
{if $options.contact_no!=''}
<p><strong>Tel:</strong> {$options.contact_no}</p>
{/if}
{if $options.admin_email!=''}
<p><strong>Email: </strong> <a href="mailto:{$options.admin_email}">{$options.admin_email}</a></p>
{/if}
</div></div>

        <div class="bot1_newt">Follow Us</div>

        <div class="social_wrapper">
          <ul class="social clearfix">
		  {if $socialoptions.facebook!=''}
            <li><a href="{$socialoptions.facebook}"><i class="fa fa-facebook-square"></i></a></li>
			{/if}
			 {if $socialoptions.linkedin!=''}
            <li><a href="{$socialoptions.linkedin}"><i class="fa fa-linkedin"></i></a></li>
			{/if}
            {if $socialoptions.instagram!=''}
		    <li><a href="{$socialoptions.instagram}"><i class="fa fa-instagram"></i></a></li>
			{/if}
          </ul>
        </div>

        
      </div>
    </div>
  </div>
</div>
{if $options.footer_copyright_text!=''}
<div class="bot2_wrapper">
  <div class="container">
    <div class="copyright">{$options.footer_copyright_text}</div>
  </div>
</div>
{/if}
</div>

<script src="{$templateurl}js/bootstrap.min.js"></script>
{if $success_message!=''}
<div id="successmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="border-bottom:none;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
       <div class="alert alert-success">
 {$success_message}
</div>
      </div>
     
    </div>

  </div>
</div>
<script>
 $(window).load(function(){        
   $('#successmodal').modal('show');
    });
	</script>
{/if}
</body>
</html>