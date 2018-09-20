{include file="header.tpl" }

{include file="home_sliders.tpl" }

<div class="splash1">
  <div class="container">
    <div class="row">
      <div class="col-md-6">

        <h1>{$welcomepageinfo.title}</h1>

      {$welcomepageinfo.short_desc|stripslashes}
        <a href="{$siteurl}{$welcomepageinfo.seo_url}{$url_suffix}" class="btn-default btn1">read more</a>

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
          <div class="txt1">{$indiapageinfo.title}</div>
          <div class="txt2">{$indiapageinfo.short_desc|stripslashes}</div>
          <a href="{$siteurl}{$indiapageinfo.seo_url}{$url_suffix}" class="btn-default btn2">more details</a>        </div>
      </div>
    </div>
  </div>
</div>

{include file="home_destinations.tpl" }

{include file="home_services.tpl" }

{include file="footer.tpl" }

