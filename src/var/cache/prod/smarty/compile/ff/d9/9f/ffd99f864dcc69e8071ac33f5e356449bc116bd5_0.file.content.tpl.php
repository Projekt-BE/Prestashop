<?php
/* Smarty version 3.1.33, created on 2021-01-05 23:23:50
  from '/var/www/html/admin419e5unvp/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff4e6f69636e2_04222682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd99f864dcc69e8071ac33f5e356449bc116bd5' => 
    array (
      0 => '/var/www/html/admin419e5unvp/themes/default/template/content.tpl',
      1 => 1600959448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff4e6f69636e2_04222682 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
