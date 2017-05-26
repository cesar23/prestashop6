<?php /* Smarty version Smarty-3.1.19, created on 2017-05-26 16:38:27
         compiled from "D:\xampp\htdocs\prestashop6\modules\fotocliente\views\templates\hook\displayProductTabContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54125928a053462110-98432441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd541b7257bc2bc1218938e2e6f7f3f1df7b1e8b6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop6\\modules\\fotocliente\\views\\templates\\hook\\displayProductTabContent.tpl',
      1 => 1495833580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54125928a053462110-98432441',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5928a053499ef2_03378729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5928a053499ef2_03378729')) {function content_5928a053499ef2_03378729($_smarty_tpl) {?><h3 class="page-product-heading">Fotos de clientes</h3>
<div class="fotocliente_bloque">
<form action="" method="post"  enctype="multipart/form-data" id="comment-form">
	<div class="form-group col-xs-12 col-md-4">
	<label for="foto">Foto: </label>
	<input type="file" name="foto" id="foto">		
	</div>

	<div class="form-group col-xs-12 col-md-4" style="<?php if ('enabled_coomment'==0) {?>display: none;<?php }?>">
	<label for="coment">Comentario: </label>
	<textarea name="commentario" id="commentario" class="formcontrol"></textarea>		
	</div>
	<br>

	<div class="submit fotocliente_bloque">
	<button type="submit" name="fotocliente_submit_foto" class="button btn btn-default button-medium">
	<span>Enviar <i class="icon-chevron-right right"></i></span>
		
	</button>
		
	</div>
</form>
	
</div><?php }} ?>
