 {if $totalrelatedtours!=0}
        <h2>Tours Starting from {$datainfo.title}</h2>
<div class="row">

{foreach from=$relatedtourslist key=tourkey item=toursinfo name=tourid}
          <div class="col-sm-4">
            <div class="rate1">
            {if $toursinfo.featured_image!=''}    <figure><a href="{$siteurl}tours/{$toursinfo.seo_url}{$url_suffix}"><img src="{$toursinfo.featured_image}" alt="{$toursinfo.title}" title="{$toursinfo.title}" class="img-responsive"></a></figure>{/if}
              <div class="txt1">{$toursinfo.title}</div>
              <div class="txt2">{$toursinfo.short_desc|stripslashes} </div>
              <a href="{$siteurl}tours/{$toursinfo.seo_url}{$url_suffix}" class="btn-default btn1">read more</a>
            </div>
          </div>
		     {/foreach}  
         
        </div>
{/if}