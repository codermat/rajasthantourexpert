{include file="header.tpl" }
<div class="page-title">
  <div class="block-info">
    <div class="header-text">Testimonials</div>
    <div class="breadcrumbs1_wrapper">
      <div class="">
        <div class="breadcrumbs1"><a href="{$siteurl}">Home</a><span>/</span>testimonials</div>
      </div>
    </div>
  </div>
  <div class="block-image">
  	{if $datainfo.featured_image!=''}
      <img src="{$datainfo.featured_image}" alt="{$datainfo.title}" class="img-responsive">
    {else}
    <img src="{$templateurl}images/header1.jpg" alt="{$datainfo.title}" class="img-responsive">
    {/if}
  </div>
</div>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-9 col-lg-9">

        <h1>Testimonials</h1>

   
        <div class="row">
		 {foreach from=$testimonialslist key=testimonialkey item=testimonialinfo name=testimonialid}
          <div class="col-sm-4">
            <div class="testimonial1">
              <div class="txt1">
                "{$testimonialinfo.testimonials_desc}"
              </div>
              <div class="txt2">{$testimonialinfo.author}</div>
            </div>
          </div>
		  {/foreach}   
        
       
        </div>

   


      </div>
    {include file="sidebar-page.tpl" }
    </div>
  </div>
</div>









{include file="footer.tpl" }
