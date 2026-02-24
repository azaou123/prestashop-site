<?php
/* Smarty version 4.3.4, created on 2026-02-24 06:25:12
  from '/var/www/html/themes/hummingbird/templates/components/toast.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_699d36389479b3_68270977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c22add7de19b462f7fba4e44e06a70570a3ca03' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/components/toast.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699d36389479b3_68270977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('componentName', 'toast');?>

<template class="js-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
-template">
  <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
-body"></div>
      <button type="button" class="btn-close me-2 m-auto d-none" data-bs-dismiss="toast"></button>
    </div>
  </div>
</template>
<?php }
}
