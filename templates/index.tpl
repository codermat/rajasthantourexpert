{include file="header.tpl" }

{include file="home_sliders.tpl" }

<div class="splash1">
  <div class="container">
    <div class="row">
      <div class="col-md-6">

        <h1>Welcome to Rajasthan Tour Experts</h1>

        <p class="title">
          Rajasthan Tour Expert is a specialist travel agency catering to travelers who want a special, authentic and unforgettable experience in Rajasthan.     </p>
        <p>
         From sightseeing and private day tours for Jaipur and nearby area to planned tours of Rajasthan and other offbeat tourist destinations, we also offer custom tours to match your specific needs.</p>
		 <p>Rajasthan Tour Expert is a Jaipur based travel agency established in the Year 2003. The proprietor, Mr. Shabbir Khan, has worked in the travel industry for the last 12 years and has extensive knowledge and experience of tourism.</p>

        <a href="#" class="btn-default btn1">read more</a>

        <br><br>
      </div>
	  {if $homefirstadinfo.image!=''}
      <div class="col-sm-6 col-md-3">
        <div class="banner1_wrapper">

          <a href="{$homefirstadinfo.link}"><img src="{$homefirstadinfo.image}"  class="img-responsive"></a> 
       </div>
      </div>
	  		  		  {/if} 
					  {if $homesecondadinfo.image!=''}
		 <div class="col-sm-6 col-md-3">
        <div class="banner1_wrapper">
				
          <a href="{$homesecondadinfo.link}"><img src="{$homesecondadinfo.image}"  class="img-responsive"></a> 

		         </div>
      </div>
	  		  		  {/if} 
    </div>
  </div>
</div>
{include file="home_tour_package.tpl" }

<div id="parallax1" class="parallax">
  <div class="bg1 parallax-bg"></div>
  <div class="overlay"></div>
  <div class="parallax-content">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-6 col-md-6 col-md-offset-6 col-lg-4 col-lg-offset-8">
          <div class="txt1">About India</div>
          <div class="txt2">and Top-Rated Attractions of india</div>
          <a href="#" class="btn-default btn2">more details</a>        </div>
      </div>
    </div>
  </div>
</div>

{include file="home_destinations.tpl" }

{include file="home_services.tpl" }

{include file="footer.tpl" }

