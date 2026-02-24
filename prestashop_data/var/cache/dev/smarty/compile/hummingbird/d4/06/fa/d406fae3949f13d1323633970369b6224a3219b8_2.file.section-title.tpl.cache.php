<?php
/* Smarty version 4.3.4, created on 2026-02-24 06:25:08
  from '/var/www/html/themes/hummingbird/templates/components/section-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_699d36342fd5e0_28244591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd406fae3949f13d1323633970369b6224a3219b8' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/components/section-title.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699d36342fd5e0_28244591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '222551486699d36342ce109_95406052';
$_smarty_tpl->_assignInScope('componentName', 'section-title');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_268883834699d36342fc426_14855434', 'section_title');
?>

<?php }
/* {block 'section_title'} */
class Block_268883834699d36342fc426_14855434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'section_title' => 
  array (
    0 => 'Block_268883834699d36342fc426_14855434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2 class="h2 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h2>
<?php
}
}
/* {/block 'section_title'} */
}
