{include file="header.tpl" }

<div class="page-title">
  <div class="block-info">
    <div class="header-text">{$datainfo.title}</div>
    <div class="breadcrumbs1_wrapper">
      <div class="">
        <div class="breadcrumbs1"><a href="{$siteurl}">Home</a><span>/</span><a href="{$siteurl}blog.html">Blog</a><span>/</span>{$datainfo.title}</div>
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

        <h1>{$datainfo.sub_title}</h1>

       
       <div class="newspace"></div>
	  
	     <div class="clearfix"></div>
	
          <div>

             {$datainfo.desc|stripslashes}

           

          </div>


 

      </div>
     {include file="sidebar-blog.tpl" }
    </div>
  </div>
</div>


{include file="footer.tpl" }
