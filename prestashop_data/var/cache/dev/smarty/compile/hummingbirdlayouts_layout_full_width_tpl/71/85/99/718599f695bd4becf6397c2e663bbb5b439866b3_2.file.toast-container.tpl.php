<?php
/* Smarty version 4.3.4, created on 2026-02-24 06:25:12
  from '/var/www/html/themes/hummingbird/templates/components/toast-container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_699d3638940be6_95503598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '718599f695bd4becf6397c2e663bbb5b439866b3' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/components/toast-container.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/toast.tpl' => 1,
  ),
),false)) {
function content_699d3638940be6_95503598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('componentName', 'toast-container');?>

<div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
 position-fixed top-0 end-0 p-3" id="js-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_subTemplateRender('file:components/toast.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}
