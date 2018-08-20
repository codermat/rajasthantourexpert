
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

      <form id="rent1" class="form-horizontal">

        <div class="form-group car-types">
          
		  <input type="text" class="form-control" id="inputName" name="name" value="First Name" onBlur="if(this.value=='') this.value='First Name'" onFocus="if(this.value =='First Name' ) this.value=''">
          
        </div>
        <div class="form-group car-brands">
           <input type="text" class="form-control" id="inputEmail" name="email" value="E-mail address" onBlur="if(this.value=='') this.value='E-mail address'" onFocus="if(this.value =='E-mail address' ) this.value=''">
        </div>
        <div class="form-group car-model">
                    <input type="text" class="form-control" id="inputPhone" name="phone" value="Phone" onBlur="if(this.value=='') this.value='Phone'" onFocus="if(this.value =='Phone' ) this.value=''">
        </div>
		<div class="form-group car-model">
                    <textarea class="form-control" rows="3" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message'" onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
        </div>

        <button type="submit" class="btn-default btn-rent-submit">book now</button>
      </form>
    </div>
  </div>
</div>