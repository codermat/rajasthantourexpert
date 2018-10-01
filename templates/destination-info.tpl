{include file="header.tpl" }

<div class="page-title">
  <div class="block-info">
    <div class="header-text">{$datainfo.title}</div>
    <div class="breadcrumbs1_wrapper">
      <div class="">
        <div class="breadcrumbs1"><a href="{$siteurl}">Home</a><span>/</span><a href="{$siteurl}destinations.html">Destinations</a><span>/</span>{$datainfo.title}</div>
      </div>
    </div>
  </div>
  <div class="block-image">
    <img src="{$templateurl}images/header1.jpg" alt="" class="img-responsive">
  </div>
</div>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-9 col-lg-9">
		{if $datainfo.sub_title!=''}
        <h1>{$datainfo.sub_title}</h1>

       
       <div class="newspace"></div>
	  {/if}
	     <div class="clearfix"></div>
	
          <div>

             {$datainfo.desc|stripslashes}

           

          </div>
 <div class="newspace"></div>
        <h2>{$datainfo.title} Images</h2>

        <div class="row">
		{foreach from=$sliderimages key=imagekey item=sliderimage name=sliderimages}
   	{if $sliderimage!=''} 
     
	   <div class="col-sm-3">
            <div class="thumb2">
              <div class="thumbnail clearfix">
               
                  <figure class="">
                    <img src="{$sliderimage}" alt="" class="img-responsive">
                  </figure>             
              </div>
            </div>
          </div>
	 {if $imagekey==3}
	  </div>
		<div class="row">
	 {/if}
   
    {/if}
   {/foreach}    
   
         
        </div>


       
 <div class="newspace"></div>
  {include file="start-destination-tours.tpl" }

 

      </div>
     {include file="sidebar-tour.tpl" }
    </div>
  </div>
</div>


{include file="footer.tpl" }
