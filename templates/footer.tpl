
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
<li><a href="#">Testimonials</a></li>
  <li><a href="{$siteurl}tour-packages{$url_suffix}">Tour Packages</a></li>
  <li><a href="{$siteurl}destinations{$url_suffix}">Destinations</a></li>
          <li><a href="#">Car & Driver Hire</a></li>
   {if $pagelist[4].title != ''} 
<li><a href="{$siteurl}{$pagelist[4].seo_url}{$url_suffix}">{$pagelist[4].title}</a></li>
{/if}
        </ul>
      </div>
      <div class="col-sm-3">

        <div class="bot1_title">RAJASTHAN TOUR PACKAGES</div>

        <ul class="ul1">
<li><a href="#">Golden Triangle Tour Packages  </a></li>
<li><a href="#">Golden Triangle with Shekhawati</a></li>
<li><a href="#">Romantic Rajasthan Tour</a></li>
<li><a href="#">Enchanting Rajasthan Tour </a></li>
<li><a href="#">Majestic Rajasthan Tour</a></li>
<li><a href="#">Unforgettable Palace Tour</a></li>
<li><a href="#">Quick Rajasthan Tour</a></li>
<li><a href="#">Discover Rajasthan Tour</a></li>
<li><a href="#">Grand Rajasthan Tour</a></li>
<li><a href="#">Rajasthan Wildlife Tour</a></li>
        </ul>
		
		
		
      </div>
	  <div class="col-sm-3">

        <div class="bot1_title">TOURIST DESTINATIONS</div>

        <ul class="ul1">
          <li><a href="#">Jaipur</a></li>
<li><a href="#">Udaipur</a></li>
<li><a href="#">Jodhpur</a></li>
<li><a href="#">Jaisalmer</a></li>
<li><a href="#">Ajmer and Pushkar </a></li>
<li><a href="#">Bikaner</a></li>
<li><a href="#">Ranthambore</a></li>
<li><a href="#">Chittorgarh</a></li>
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
</body>
</html>