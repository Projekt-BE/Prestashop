<?php
/* Smarty version 3.1.33, created on 2021-01-05 23:29:16
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ff4e83c54e427_88981384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '834aefa683df5ffd86a2bff943c00fc4022ef7ce' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1592468016,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff4e83c54e427_88981384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9286649095ff4e83c54d8b4_83433634', "page_content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "page_content"} */
class Block_9286649095ff4e83c54d8b4_83433634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_9286649095ff4e83c54d8b4_83433634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block "page_content"} */
}
