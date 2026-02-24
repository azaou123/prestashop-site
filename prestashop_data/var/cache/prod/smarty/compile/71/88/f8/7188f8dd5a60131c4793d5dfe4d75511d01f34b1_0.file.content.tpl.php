<?php
/* Smarty version 4.3.4, created on 2026-02-24 03:03:26
  from '/var/www/html/admin9014z77vpinmj03dssx/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_699d06ee53cf19_60821295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7188f8dd5a60131c4793d5dfe4d75511d01f34b1' => 
    array (
      0 => '/var/www/html/admin9014z77vpinmj03dssx/themes/default/template/content.tpl',
      1 => 1770109425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699d06ee53cf19_60821295 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
