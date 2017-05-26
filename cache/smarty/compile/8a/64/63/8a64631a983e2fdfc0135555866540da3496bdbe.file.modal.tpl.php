<?php /* Smarty version Smarty-3.1.19, created on 2017-05-26 16:38:09
         compiled from "D:\xampp\htdocs\prestashop6\admin961p2hs7b\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:247755928a041d36ee6-72587188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a64631a983e2fdfc0135555866540da3496bdbe' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop6\\admin961p2hs7b\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1491849202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247755928a041d36ee6-72587188',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5928a041d3d6c5_18325207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5928a041d3d6c5_18325207')) {function content_5928a041d3d6c5_18325207($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
