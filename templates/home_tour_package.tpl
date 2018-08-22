<div class="cars_wrapper clearfix">
 <div class="container"><h2>RAJASTHAN TOUR PACKAGES</h2></div>
{foreach from=$tourslist key=tourkey item=toursinfo name=tourid}
 	<div class="car1 clearfix">
    <a href="{$siteurl}tours/{$toursinfo.seo_url}{$url_suffix}" class="clearfix minheight0">
    {if $toursinfo.featured_image!=''}  <figure><img src="{$toursinfo.featured_image}" alt="{$toursinfo.title}" class="img-responsive"></figure>{/if}
      <span class="caption">
        <span class="txt1">{$toursinfo.title}</span>
      {if $toursinfo.duration!=''}  <span class="txt2">{$toursinfo.duration}</span>{/if}
	 {if $toursinfo.destination!=''}	<span class="txt2">Destinations : {$toursinfo.destination}</span>{/if}
		</span>    </a>  </div>
		 {/foreach}  
</div>
