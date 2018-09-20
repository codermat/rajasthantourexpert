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
  	{if $datainfo.featured_image!=''}
      <img src="{$datainfo.featured_image}" alt="{$datainfo.title}" class="img-responsive">
    {else}
    <img src="{$templateurl}images/header1.jpg" alt="{$datainfo.title}" class="img-responsive">
    {/if}
  </div>
</div>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">

        <h1>what we offer</h1>

        <div class="row">
          <div class="col-sm-6">
{if $options.address!=''}
            <p>
              <b>Address:</b><br>
{$options.address}
<br>
          </p>
 {/if} 
          </div>
          <div class="col-sm-6">

            <p>
           {if $options.contact_no!=''}   
			  <b>Telephone:</b>&nbsp;  {$options.contact_no}<br>{/if}
{if $options.admin_email!=''} <b>E-mail:</b><br>    <a href="mailto:{$options.admin_email}">{$options.admin_email}</a>
       {/if}     </p>

          </div>
        </div>

        <p>
          <b>Follow us:</b>
        </p>

        <div class="social2_wrapper">
          <ul class="social2 clearfix">
		   
		    {if $socialoptions.facebook!=''}
            <li><a href="{$socialoptions.facebook}"><i class="fa fa-facebook"></i></a></li>
			{/if}
			 {if $socialoptions.twitter!=''}
            <li><a href="{$socialoptions.twitter}"><i class="fa fa-twitter"></i></a></li>
			{/if}
			 {if $socialoptions.linkedin!=''}
            <li><a href="{$socialoptions.linkedin}"><i class="fa fa-linkedin"></i></a></li>
			{/if} 
			
			  {if $socialoptions.instagram!=''}
            <li><a href="{$socialoptions.instagram}"><i class="fa fa-instagram"></i></a></li>
			{/if}
			 {if $socialoptions.youtube!=''}
            <li><a href="{$socialoptions.youtube}"><i class="fa fa-youtube"></i></a></li>
			{/if}
          </ul>
        </div>

        <br>
        <br>

        <p>
          <b>Our Location:</b>
        </p>
		
        <div> {if $options.google_map_code!=''} {$options.google_map_code} {/if}  </div>


      </div>
      <div class="col-sm-12 col-md-6">

        <div class="form1">
          <div class="txt1">Have questions?</div>
          <div class="txt2">contact us today</div>

          <div id="note"></div>
          <div id="fields">
            <form id="ajax-contact-form" class="form-horizontal"  action="" role="form" method="post" >
			<input type="hidden" name="form_type" value="contact_us" >
							<input type="hidden" name="referer" value="{$siteurl}{$pagelist[4]['seo_url']}{$url_suffix}" >
								{if $success_message!=''}
								   <div class="row">						
									<div class="col-sm-12"><div class="form-group">			
										{$success_message}
									</div>
								</div></div>
								{/if}
              <div class="row">
			  
                <div class="col-sm-6">
                  <div class="form-group">
                      <label for="inputName">First Name*</label>
                      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="" required >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                      <label for="inputLName">Last Name*</label>
                      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="" required >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label for="inputEmail">Email*</label>
                      <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email Address" value="" required  >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                      <label for="inputPhone">Phone*</label>
                      <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact No." value="" required >
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                      <label for="inputMessage">Your Message</label>
                      <textarea class="form-control" rows="14" id="message" name="message" 
                                   placeholder="Message" ></textarea>
                  </div>
                </div>
              </div>
			  <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
			<div class="g-recaptcha" data-sitekey="6LdgNXEUAAAAAEZvZ5reHlgvbiVRBbY0G6QeRITP"></div>
			  </div>
                </div>
              </div>
              <button type="submit" class="btn-default btn-cf-submit">submit</button>
            </form>
          </div>


        </div>



      </div>
    </div>
  </div>
</div>

{include file="footer.tpl" }
