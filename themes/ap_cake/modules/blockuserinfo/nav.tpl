<script type="text/javascript">
/* Blockusreinfo */
	
$(document).ready( function(){
	if( $(window).width() < 991 ){
			$(".header_user_info").addClass('popup-over e-scale');
			$(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over e-scale');
			$(".header_user_info .links").removeClass('popup-content');
		}
	$(window).resize(function() {
		if( $(window).width() < 991 ){
			$(".header_user_info").addClass('popup-over e-scale');
			$(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over e-scale');
			$(".header_user_info .links").removeClass('popup-content');
		}
	});
});
</script>
<!-- Block user information module NAV  -->
<div class="header_user_info">	
	{if $is_logged}	
		<ul class="pull-right">
			<li class="account">
				<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" rel="nofollow">
					<i class="fa fa-user"></i>
					<span>{l s='Hello' mod='blockuserinfo'}, {$cookie->customer_firstname} {$cookie->customer_lastname}</span>
				</a>
			</li>
		</ul>
	{else}
		<div class="header_info">{l s='Welcome guess! You can ' mod='blockuserinfo'}<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}">{l s='login' mod='blockuserinfo'}</a>{l s=' or ' mod='blockuserinfo'}<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}">{l s='create an account' mod='blockuserinfo'}</a></div>
	{/if}
	<div data-toggle="dropdown" class="popup-title"><a href="#"><i class="fa fa-cog"></i><span>{l s='Account' mod='blockuserinfo'}</span></a></div>
	<ul class="links">
		<li>
			<a class="ap-btn-wishlist" id="wishlist-total" href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|addslashes}" title="{l s='My wishlists' mod='blockuserinfo'}">
				<span>{l s='Wishlist' mod='blockuserinfo'}</span><span class="ap-total-wishlist ap-total"></span>
			</a>
		</li>
		<li>
			<a class="ap-btn-compare" href="{$link->getPageLink('products-comparison')|escape:'html':'UTF-8'}" title="{l s='Compare' mod='blockuserinfo'}" rel="nofollow">
				<span>{l s='Compare' mod='blockuserinfo'}</span><span class="ap-total-compare ap-total"></span>
			</a>
		</li>
		<li>
			<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='My account' mod='blockuserinfo'}">
				<span>{l s='My Account' mod='blockuserinfo'}</span>
			</a>
		</li>
		{if $is_logged}
			<li>
				<a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
					<i class="fa fa-unlock-alt"></i><span>{l s='Sign out' mod='blockuserinfo'}</span>
				</a>
			</li>
		{/if}		
	</ul>	
</div>	