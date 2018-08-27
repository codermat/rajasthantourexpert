{include file="header.tpl" }


<div class="page-title">
  <div class="block-info">
    <div class="header-text">Destinations</div>
    <div class="breadcrumbs1_wrapper">
      <div class="">
        <div class="breadcrumbs1"><a href="{$siteurl}">Home</a><span>/</span>Destinations</div>
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

        <div class="sort_wrapper" style="display:none;">
          <form id="sort1" class="form-horizontal">

            <div class="form-group">
              <label for="sel1">Sort by:</label>
              <select id="sort" class="form-control">
                <option>Default Sorting</option>
                <option>Title Asc</option>
                <option>Title Desc</option>
              </select>
            </div>

          </form>
        </div>

        <h1>Rajasthan Destinations</h1>

        <div class="row">
		   {foreach from=$destinationslist key=destinationkey item=destinationinfo name=destinationid}
      <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="vehicle1 clearfix">
          <a href="{$siteurl}destinations/{$destinationinfo.seo_url}{$url_suffix}" class="clearfix">
            <figure>
           {if $destinationinfo.featured_image!=''}   <img src="{$destinationinfo.featured_image}" alt="{$destinationinfo.title}" class="img-responsive">{/if}
              <span class="txt1">{$destinationinfo.title}</span>
              <span class="txt2"><i>more details</i></span>            </figure>
            <span class="caption">
              <span class="txt3">{$destinationinfo.short_desc}  </span>  </span>          </a> </div>
      </div>
	  {/foreach} 
		
        </div>

        <div class="pager_wrapper" style="display:none;">
          <ul class="pager clearfix">
            <li class="prev"><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
            <li class="li"><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li class="li"><a href="#">3</a></li>
            <li class="li"><a href="#">4</a></li>
            <li class="next"><a href="#">Next Page <i class="fa fa-angle-right"></i></a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>



{include file="footer.tpl" }
