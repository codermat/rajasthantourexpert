{include file="header.tpl" }


<div class="page-title">
  <div class="block-info">
    <div class="header-text">Blog</div>
    <div class="breadcrumbs1_wrapper">
      <div class="">
        <div class="breadcrumbs1"><a href="{$siteurl}">Home</a><span>/</span>Blog</div>
      </div>
    </div>
  </div>
  <div class="block-image">
    <img src="{$templateurl}images/header3.jpg" alt="" class="img-responsive">
  </div>
</div>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        

        <h1>Rajasthan Tour Expert Blog</h1>

        <div class="row">
		   {foreach from=$blogposts key=blogkey item=bloginfo name=blogid}
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="vehicle1 clearfix">
          <a href="{$siteurl}blog/{$bloginfo.seo_url}{$url_suffix}" class="clearfix">
            <figure>
           {if $bloginfo.featured_image!=''}   <img src="{$bloginfo.featured_image}" alt="{$bloginfo.title}" class="img-responsive">{/if}
              <span class="txt1">{$bloginfo.title}</span>
              <span class="txt2"><i>more details</i></span>            </figure>
            <span class="caption">
              <span class="txt3">{$bloginfo.short_desc}  </span>  </span>          </a> </div>
      </div>
	  
	    {if $blogkey%4==3}
	   </div>
	   <div class="row">
	       {/if}
		   
	  {/foreach} 
		
        </div>

       <!-- Pagination Starts here -->
					{$pagination}
					<!-- Pagination Ends here -->
	   
	   

      </div>
    </div>
  </div>
</div>



{include file="footer.tpl" }
