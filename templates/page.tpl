{include file="header.tpl" }
<div class="page-title">
  <div class="block-info">
    <div class="header-text">{$datainfo.title}</div>
    <div class="breadcrumbs1_wrapper">
      <div class="">
        <div class="breadcrumbs1"><a href="{$siteurl}">Home</a><span>/</span>{$datainfo.title}</div>
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

        <h1>{$datainfo.title}</h1>

        <div class="row">
         
          <div class="col-sm-12">

          {$datainfo.desc|stripslashes}

          </div>
        </div>

       <br>

        <h2>Testimonials</h2>

        <div class="row">
          <div class="col-sm-4">
            <div class="testimonial1">
              <div class="txt1">
                "Curabitur elementum, diam ut rhoncus venenatis, erat nulla dictum odio, id laoreet lacus sapien in ex. Etiam pellentesque sollicitudin nibh vel accumsan. Sed tempus eget tortor eget vehicula. Praesent gravida, diam sit amet venenatis vestibulum, diam odio elementum ex, sed feugiat nisl eros dapibus dolor. Quisque efficitur dui ipsum, nec tempus augue luctus nec."
              </div>
              <div class="txt2">- Scott  |  Houston, TX</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="testimonial1">
              <div class="txt1">
                "Nunc rutrum ullamcorper nunc et tincidunt. Mauris leo augue, rhoncus vel suscipit quis, dictum sed risus. Ut ultrices risus ut mauris vehicula feugiat vehicula id mauris. Vestibulum commodo risus tempor massa finibus sodales. Morbi nec dolor in magna mollis congue."
              </div>
              <div class="txt2">- Martin    |  Houston, TX</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="testimonial1">
              <div class="txt1">
                "Duis eget nibh sit amet erat suscipit venenatis. Integer non elit ipsum. Nullam sed volutpat dolor, non tincidunt dolor. Cras tempus viverra lacus, ut euismod lectus hendrerit eu. Morbi tincidunt sapien sit amet neque laoreet cursus. Aliquam erat volutpat. Donec euismod quam non viverra mollis. Vestibulum ac lacus at nisi tempor hendrerit."
              </div>
              <div class="txt2">- Samanta    |  Houston, TX</div>
            </div>
          </div>
        </div>

        <br>

        <p>
          <a href="#" class="btn-default btn1">read more testimonials</a>
        </p>


      </div>
    {include file="sidebar-page.tpl" }
    </div>
  </div>
</div>









{include file="footer.tpl" }
