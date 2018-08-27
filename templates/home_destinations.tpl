<div class="vehicles_wrapper">
  <div class="container">

    <h2>RAJASTHAN TOURIST DESTINATIONS</h2>

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
  </div>
</div>
