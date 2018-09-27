<!DOCTYPE html>
<html lang="en">
<head><title>{$options.meta_tag_title}{if $is_home eq 'false'} {if $datainfo.meta_title!=''} |  {$datainfo.meta_title} {/if} {/if}</title>
<meta name="keywords" content="{$options.meta_tag_keywords} {$datainfo.meta_tag_keywords} " />
<meta name="description" content="{$options.meta_tag_descriptions} {$datainfo.meta_tag_descriptions}" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Sikander Singh Shekhawat">
<link href="{$templateurl}css/bootstrap.css" rel="stylesheet">
<link href="{$templateurl}css/font-awesome.css" rel="stylesheet">
<link href="{$templateurl}css/flexslider.css" rel="stylesheet">
<link href="{$templateurl}css/animate.css" rel="stylesheet">
<link href="{$templateurl}css/style.css" rel="stylesheet">

<script src="{$templateurl}js/jquery.js"></script>
<script src="{$templateurl}js/jquery-migrate-1.2.1.min.js"></script>
<script src="{$templateurl}js/jquery.easing.1.3.js"></script>
<script src="{$templateurl}js/superfish.js"></script>

<script src="{$templateurl}js/jquery.flexslider.js"></script>

<script src="{$templateurl}js/jquery.appear.js"></script>

<script src="{$templateurl}js/jquery.equalheights.js"></script>
<script src="{$templateurl}js/matchMedia.js"></script>
<script src="{$templateurl}js/jquery.ui.totop.js"></script>

<script src="{$templateurl}js/jquery.caroufredsel.js"></script>
<script src="{$templateurl}js/jquery.touchSwipe.min.js"></script>

<script src="{$templateurl}js/jquery.parallax-1.1.3.resize.js"></script>

<script src="{$templateurl}js/SmoothScroll.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?sensor=false.js"></script>
<script src="{$templateurl}js/googlemap.js"></script>
<script src="{$templateurl}js/scripts.js"></script>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="{$bodyclass} {if $is_home eq 'true'} front{/if} ">

<div id="main">

<div class="top1_wrapper">
  <div class="top1 clearfix">

    <header>
      <div class="logo_wrapper">
        <a href="{$siteurl}" class="logo">
		{if !$options.cm_logo}
          <img src="{$templateurl}images/logo.png" alt="{$options.meta_tag_title}" title="{$options.meta_tag_title}" class="img-responsive">    
   	{else}
								<img src="{$options.cm_logo}" alt="{$options.meta_tag_title}" title="{$options.meta_tag_title}" class="img-responsive">     
								{/if}
								   </a>      </div>
    </header>

    <div class="menu_wrapper clearfix">
      <div class="navbar navbar_ navbar-default">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>        </button>
        <div class="navbar-collapse navbar-collapse_ collapse">
          <ul class="nav navbar-nav sf-menu clearfix">
            <li {if $is_home eq 'true'}class="active"{/if}><a href="{$siteurl}">Home</a></li>
             {if $pagelist[1].title != ''} 
           	 <li {if $datainfo.seo_url eq $pagelist[1].seo_url}class="active"{/if}><a href="{$siteurl}{$pagelist[1].seo_url}{$url_suffix}">{$pagelist[1].title}</a></li>
             {/if}

            <li class="{if $activepage eq 'tour-packages'}active {/if} sub-menu sub-menu-1"><a href="{$siteurl}tour-packages{$url_suffix}">Tour Packages<i class="fa fa-angle-down"></i></a>
			 <ul>
			    {foreach from=$menutourpackagelist key=menutourpackagekey item=menutourpackageinfo name=menutourpackageid}
          <li><a href="{$siteurl}tour-packages/{$menutourpackageinfo.seo_url}{$url_suffix}">{$menutourpackageinfo.title}</a></li>
		   {/foreach}  
			                 
              </ul>
			</li>
      
		   
		    <li {if $activepage eq 'destinations'}class="active"{/if}><a href="{$siteurl}destinations{$url_suffix}">Destinations</a></li>
            
           {if $pagelist[5].title != ''} 
           	 <li  {if $datainfo.seo_url eq $pagelist[5].seo_url}class="active"{/if} ><a href="{$siteurl}{$pagelist[5].seo_url}{$url_suffix}">{$pagelist[5].title}</a></li>
             {/if}
           
            {if $pagelist[4].title != ''} 
           	 <li  {if $datainfo.seo_url eq $pagelist[4].seo_url}class="active"{/if} ><a href="{$siteurl}{$pagelist[4].seo_url}{$url_suffix}">{$pagelist[4].title}</a></li>
             {/if}
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>