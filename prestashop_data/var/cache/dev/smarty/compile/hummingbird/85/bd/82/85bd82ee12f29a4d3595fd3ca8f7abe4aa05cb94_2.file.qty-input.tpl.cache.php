<?php
/* Smarty version 4.3.4, created on 2026-02-24 06:25:08
  from '/var/www/html/themes/hummingbird/templates/components/qty-input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_699d36344b1774_68166053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85bd82ee12f29a4d3595fd3ca8f7abe4aa05cb94' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/components/qty-input.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699d36344b1774_68166053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '555183736699d363447a095_31627994';
?>

<?php $_smarty_tpl->_assignInScope('increment_icon', "E145");
$_smarty_tpl->_assignInScope('decrement_icon', "E15B");
$_smarty_tpl->_assignInScope('submit_icon', "E5CA");
$_smarty_tpl->_assignInScope('cancel_icon', "E5CD");?>

<?php if ($_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?>
  <?php $_smarty_tpl->_assignInScope('prepend', array("button"=>"increment","icon"=>$_smarty_tpl->tpl_vars['increment_icon']->value,"confirm_icon"=>$_smarty_tpl->tpl_vars['submit_icon']->value));?>
  <?php $_smarty_tpl->_assignInScope('append', array("button"=>"decrement","icon"=>$_smarty_tpl->tpl_vars['decrement_icon']->value,"confirm_icon"=>$_smarty_tpl->tpl_vars['cancel_icon']->value));
} else { ?>
  <?php $_smarty_tpl->_assignInScope('prepend', array("button"=>"decrement","icon"=>$_smarty_tpl->tpl_vars['decrement_icon']->value,"confirm_icon"=>$_smarty_tpl->tpl_vars['cancel_icon']->value));?>
  <?php $_smarty_tpl->_assignInScope('append', array("button"=>"increment","icon"=>$_smarty_tpl->tpl_vars['increment_icon']->value,"confirm_icon"=>$_smarty_tpl->tpl_vars['submit_icon']->value));
}?>

<div class="input-group flex-nowrap<?php if ((isset($_smarty_tpl->tpl_vars['marginHelper']->value))) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['marginHelper']->value, ENT_QUOTES, 'UTF-8');
} else { ?> mb-3<?php }?>">
  <button role="button" aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prepend']->value['button'], ENT_QUOTES, 'UTF-8');?>
" class="btn <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prepend']->value['button'], ENT_QUOTES, 'UTF-8');?>
 js-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prepend']->value['button'], ENT_QUOTES, 'UTF-8');?>
-button" type="button">
    <i class="material-icons" aria-hidden="true">&#x<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prepend']->value['icon'], ENT_QUOTES, 'UTF-8');?>
;</i>
    <i class="material-icons confirmation d-none">&#x<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prepend']->value['confirm_icon'], ENT_QUOTES, 'UTF-8');?>
;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          class="form-control"
      name="qty"
      aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['append']->value['button'], ENT_QUOTES, 'UTF-8');?>
" class="btn <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['append']->value['button'], ENT_QUOTES, 'UTF-8');?>
 js-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['append']->value['button'], ENT_QUOTES, 'UTF-8');?>
-button" type="button">
    <i class="material-icons" aria-hidden="true">&#x<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['append']->value['icon'], ENT_QUOTES, 'UTF-8');?>
;</i>
    <i class="material-icons confirmation d-none">&#x<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['append']->value['confirm_icon'], ENT_QUOTES, 'UTF-8');?>
;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
<?php }
}
