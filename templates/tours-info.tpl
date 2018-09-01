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
    <img src="{$templateurl}images/header1.jpg" alt="" class="img-responsive">
  </div>
</div>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-9 col-lg-9">

        <h1>{$datainfo.title}</h1>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
 
  {foreach from=$sliderimages key=imagekey item=sliderimage name=sliderimages}
   	{if $sliderimage!=''}
    <li data-target="#myCarousel" data-slide-to="{$imagekey}" {if $imagekey==0} class="active" {/if}></li>
     {/if}
     {/foreach}    
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
   {foreach from=$sliderimages key=imagekey item=sliderimage name=sliderimages}
   	{if $sliderimage!=''}
    <div class="item {if $imagekey==0} active{/if}">
      <img src="{$sliderimage}" >
    </div>
    {/if}
   {/foreach}    
   
  
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
       
       <div class="newspace"></div>
	   
       	{if $datainfo.duration!=''}
		  <div class="col-sm-6 bgtop">
		  <div class="row">
	      <div id="boxleft"><strong>DURATION :</strong> {$datainfo.duration}</div>
          </div></div>
          {/if}
          	{if $datainfo.destination!=''}
		  <div class="col-sm-6 bgtop">
		  <div class="row">
           <div id="boxright"> <strong>DESTINATIONS:</strong> {$datainfo.destination} </div>
          </div></div>
          {/if} 
	     <div class="clearfix"></div>
	 <hr>
          <div>

             {$datainfo.desc|stripslashes}

           

          </div>
<div class="newspace"></div>
<h1>Tour Map</h1>

  {$datainfo.tour_map|stripslashes}
	   

       
 <div class="newspace"></div>
 
 {include file="related-tours.tpl" }



      </div>
     {include file="sidebar-tour.tpl" }
    </div>
  </div>
</div>


{include file="footer.tpl" }
