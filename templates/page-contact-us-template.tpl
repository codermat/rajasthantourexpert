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

            <p>
              <b>Address:</b><br>
2, Near Loco, Yaadon ka Chowk, Hasanpura (A), Khatipura Road, Jaipur 302006 (Rajasthan)
<br>
<a href="#">Get Directions</a>
            </p>

          </div>
          <div class="col-sm-6">

            <p>
              <b>Freephone:</b>  +91- 8824101046<br>
<b>Telephone:</b>&nbsp;  +91- 8824101046<br>
<b>E-mail:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <a href="mailto:booking@rajasthantourexpert.com">booking@rajasthantourexpert.com</a>
            </p>

          </div>
        </div>

        <p>
          <b>Follow us:</b>
        </p>

        <div class="social2_wrapper">
          <ul class="social2 clearfix">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>

        <br>
        <br>

        <p>
          <b>Our Location:</b>
        </p>

        <div id="google_map"></div>






      </div>
      <div class="col-sm-12 col-md-6">

        <div class="form1">
          <div class="txt1">Have questions?</div>
          <div class="txt2">contact us today</div>

          <div id="note"></div>
          <div id="fields">
            <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label for="inputName">First Name</label>
                      <input type="text" class="form-control" id="inputName" name="name" value="First Name" onBlur="if(this.value=='') this.value='First Name'" onFocus="if(this.value =='First Name' ) this.value=''">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                      <label for="inputLName">Last Name</label>
                      <input type="text" class="form-control" id="inputLName" name="lname" value="Last Name" onBlur="if(this.value=='') this.value='Last Name'" onFocus="if(this.value =='Last Name' ) this.value=''">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label for="inputEmail">Email</label>
                      <input type="text" class="form-control" id="inputEmail" name="email" value="E-mail address" onBlur="if(this.value=='') this.value='E-mail address'" onFocus="if(this.value =='E-mail address' ) this.value=''">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                      <label for="inputPhone">Phone</label>
                      <input type="text" class="form-control" id="inputPhone" name="phone" value="Phone" onBlur="if(this.value=='') this.value='Phone'" onFocus="if(this.value =='Phone' ) this.value=''">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                      <label for="inputMessage">Your Message</label>
                      <textarea class="form-control" rows="14" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message'"
                                  onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
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
