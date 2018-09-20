  <div class="rent1">
      <div class="txt1">Get A quote</div>
      <div class="txt2">Request a quote now</div>

      <form id="rent1" method="post" method="post" class="form-horizontal">
<input type="hidden" name="form_type" value="get_a_quote" >
<input type="hidden" name="referer" value="{$siteurl}" >
						
        <div class="form-group car-types">
          
		  <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Your Name" value="" required >
          
        </div>
        <div class="form-group car-brands">
           <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email Address" value="" required  >
        </div>
        <div class="form-group car-model">
                    <input type="text" class="form-control" name="contact_number" placeholder="Contact No." value="" required >
        </div>
		<div class="form-group car-model">
                    <textarea class="form-control" rows="3" required id="message" name="message" 
                                   placeholder="Message"></textarea>
        </div>

        <button type="submit" class="btn-default btn-rent-submit">book now</button>
      </form>
    </div>