<?php /*%%SmartyHeaderCode:214515927654ecef5f7-95653540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb78cffb0b063e46f2c0691f948d447bb6ff94be' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop6\\themes\\default-bootstrap\\modules\\blockcms\\blockcms.tpl',
      1 => 1491849202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214515927654ecef5f7-95653540',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'footer_text' => 0,
    'display_poweredby' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5927654f00a0d9_42623163',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5927654f00a0d9_42623163')) {function content_5927654f00a0d9_42623163($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Información</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://localhost/prestashop6/bajamos-precios" title="Promociones especiales">
						Promociones especiales
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/prestashop6/nuevos-productos" title="Novedades">
					Novedades
				</a>
			</li>
										<li class="item">
					<a href="http://localhost/prestashop6/mas-vendido" title="¡Lo más vendido!">
						¡Lo más vendido!
					</a>
				</li>
										<li class="item">
					<a href="http://localhost/prestashop6/tiendas" title="Nuestras tiendas">
						Nuestras tiendas
					</a>
				</li>
									<li class="item">
				<a href="http://localhost/prestashop6/contactanos" title="Contacte con nosotros">
					Contacte con nosotros
				</a>
			</li>
															<li class="item">
						<a href="http://localhost/prestashop6/content/3-terminos-y-condiciones-de-uso" title="Términos y condiciones">
							Términos y condiciones
						</a>
					</li>
																<li class="item">
						<a href="http://localhost/prestashop6/content/4-sobre-nosotros" title="Sobre nosotros">
							Sobre nosotros
						</a>
					</li>
													<li>
				<a href="http://localhost/prestashop6/mapa-web" title="Mapa del sitio">
					Mapa del sitio
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
