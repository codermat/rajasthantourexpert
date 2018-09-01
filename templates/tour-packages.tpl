
{include file="header.tpl" }

<div class="page-title">
  <div class="block-info">
    <div class="header-text">Tour Packages</div>
    <div class="breadcrumbs1_wrapper">
      <div class="">
        <div class="breadcrumbs1"><a href="{$siteurl}">Home</a><span>/</span>{$datainfo.title}</div>
      </div>
    </div>
  </div>
  <div class="block-image">
  {if $datainfo.featured_image!=''}
    <img src="{$datainfo.featured_image}"  class="img-responsive">
	{else}
	 <img src="{$templateurl}images/header4.jpg" alt="" class="img-responsive">
	{/if}
  </div>
</div>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-9 col-lg-9">

        <h1>{$datainfo.title}</h1>

        <p>
          {$datainfo.desc|stripslashes}  </p>

        <br>

        <div class="row">
		{foreach from=$tourslist key=tourkey item=toursinfo name=tourid}
          <div class="col-sm-4">
            <div class="services1">
            {if $toursinfo.featured_image!=''}    <figure><img src="{$toursinfo.featured_image}" alt="{$toursinfo.title}" title="{$toursinfo.title}" class="img-responsive"></figure>{/if}
              <div class="txt1">{$toursinfo.title}</div>
              <div class="txt2">{$toursinfo.short_desc|stripslashes} </div>
              <a href="{$siteurl}tours/{$toursinfo.seo_url}{$url_suffix}" class="btn-default btn1">read more</a>
            </div>
          </div>
		 {if $tourkey%3 == 2}					
						</div>
						<div class="row">
						{/if}
		
		
		   {/foreach}  
          
        
       
		
        </div>



      </div>
	   {include file="sidebar-tour.tpl" }

    </div>
  </div>
</div>



{include file="footer.tpl" }
