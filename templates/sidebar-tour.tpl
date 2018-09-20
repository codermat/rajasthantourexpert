 <div class="col-sm-12 col-md-3 col-lg-3">

        {include file="sidebar-quotation-form.tpl" }

        <div class="row">
		 {if $sidebarfirstadinfo.image!=''}
       <div class="col-sm-6 col-md-12">
        <div class="banner1_wrapper">

          <a href="{$sidebarfirstadinfo.link}"><img src="{$sidebarfirstadinfo.image}"  class="img-responsive"></a> 
       </div>
      </div>
	  		  		  {/if}
       {if $sidebarsecondadinfo.image!=''}
       <div class="col-sm-6 col-md-12">
        <div class="banner1_wrapper">

          <a href="{$sidebarsecondadinfo.link}"><img src="{$sidebarsecondadinfo.image}"  class="img-responsive"></a> 
       </div>
      </div>
	  		  		  {/if}
        </div>


{$options.sidebar_trip_advisor_code}
  
 <div class="newspace"></div>

<div class="accordion" id="accordion1">
  {foreach from=$menutourpackagelist key=menutourpackagekey item=menutourpackageinfo name=menutourpackageid}
       
		  		<div class="accordion-group">
	    <div class="accordion-heading">
	        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#tour_side_list_{$menutourpackageinfo.id}">
	        	{$menutourpackageinfo.title}        </a>
	    </div>
	    <div id="tour_side_list_{$menutourpackageinfo.id}" class="accordion-body collapse {if $datainfo.tourpackageid == $menutourpackageinfo.id}in{/if}">
	        <div class="accordion-inner">
	        	<ul class="ul2">		
		       {foreach from=$sidebartourslist key=sidebartourskey item=sidebartoursinfo name=sidebartoursid}
   					{if $menutourpackageinfo.id==$sidebartoursinfo.tourpackageid }
			          <li><a href="{$siteurl}tours/{$sidebartoursinfo.seo_url}{$url_suffix}">{$sidebartoursinfo.title}</a></li>					     
			  		{/if}
			    {/foreach}      
				  
			</ul>
	        </div>
	    </div>
	</div>  
		   {/foreach}   
		  


	
</div>

      </div>
	  