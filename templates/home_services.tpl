<div class="container darkbeground">
<h2>OUR SERVICES</h2>
        <!-- Boxes de Acoes -->
		 {foreach from=$servicelist key=servicekey item=serviceinfo name=serviceid}
		<div class="col-xs-12 col-sm-2 col-lg-2">
			<div class="box">							
				<div class="icon">
					{if $serviceinfo.service_icon!=''}<div class="image"><i class="fa {$serviceinfo.service_icon}"></i></div>{/if}
					<div class="info">
						<h3 class="title">{$serviceinfo.title}</h3>
						<p>{$serviceinfo.service_desc}</p>
						{if $serviceinfo.read_more_link!=''}
						<div class="more">
							<a href="{$serviceinfo.read_more_link}" title="{$serviceinfo.title}">
								Read More <i class="fa fa-angle-double-right"></i>
							</a>
						</div>
						{/if}
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
		{/foreach}  
		   
		<!-- /Boxes de Acoes -->

</div>
