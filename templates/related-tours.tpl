 
        <h2>Related Tour </h2>
<div class="row">

{foreach from=$relatedtourslist key=tourkey item=toursinfo name=tourid}
          <div class="col-sm-4">
            <div class="rate1">
            {if $toursinfo.featured_image!=''}    <figure><img src="{$toursinfo.featured_image}" alt="{$toursinfo.title}" title="{$toursinfo.title}" class="img-responsive"></figure>{/if}
              <div class="txt1">{$toursinfo.title}</div>
              <div class="txt2">{$toursinfo.short_desc|stripslashes} </div>
              <a href="{$siteurl}tours/{$toursinfo.seo_url}{$url_suffix}" class="btn-default btn1">read more</a>
            </div>
          </div>
		     {/foreach}  
      
   
          
        </div>