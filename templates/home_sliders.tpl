
<div id="slider_wrapper">
  <div id="slider">
    <div id="flexslider">
      <ul class="slides clearfix">
	  {foreach from=$sliderimages key=sliderimageid item=sliderimage }
		{if $sliderimage!=''}
        <li>
          <img src="{$sliderimage}" >
          <div class="flex-caption">
            <div class="flex-caption_inner">
			{foreach from=$sliderimagestitle key=slidertitleid item=slidertitle }
			{if $sliderimageid==$slidertitleid}
              <div class="txt1">{$slidertitle}</div>
			  {/if}
			    {/foreach} 
            </div>
          </div>
        </li>
		{/if}
  {/foreach}  

      </ul>
    </div>

    <div class="rent1">
      <div class="txt1">Get A quote</div>
      <div class="txt2">Request a quote now</div>

      <form id="get_a_quote_form" method="post" name="get_a_quote_form" class="form-horizontal" >
<input type="hidden" name="form_type" value="get_a_quote" >
<input type="hidden" name="referer" value="{$siteurl}" >
								
        <div class="form-group car-types">
          
		  <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Your Name" value="" required >
          
        </div>
        <div class="form-group car-brands">
           <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email Address" value="" required  >
        </div>
        <div class="form-group car-model">
                    <input type="text" class="form-control" id="inputPhone" name="contact_number" placeholder="Contact No." value="" required >
        </div>
		<div class="form-group car-model">
                    <textarea class="form-control" rows="3" required id="message" name="message" 
                                   placeholder="Message"></textarea>
        </div>

        <button type="submit" class="btn-default btn-rent-submit">book now</button>
      </form>
    </div>
  </div>
</div>