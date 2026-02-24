<?php
/* Smarty version 4.3.4, created on 2026-02-24 06:25:12
  from 'module:ps_contactinfops_contactinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_699d36388cf0d9_88728287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfops_contactinfo.tpl',
      1 => 1750078354,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699d36388cf0d9_88728287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),));
?>
<!-- begin /var/www/html/themes/hummingbird/modules/ps_contactinfo/ps_contactinfo.tpl -->
<div class="footer__block block-contact col-md-6 col-lg-3">

  <p class="footer__block__title d-none d-md-flex"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

  <div role="button" class="footer__block__toggle d-md-none collapsed" data-bs-target="#contact-infos" data-bs-toggle="collapse" aria-expanded="false">
    <span class="footer__block__title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <i class="material-icons" aria-hidden="true">arrow_drop_down</i>
  </div>

  <div id="contact-infos" class="footer__block__content footer__block__content-contact collapse">

    <div class="contact__infos">
      <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      <div class="contact__phone">
        <i class="material-icons" aria-hidden="true">phone</i>
        <a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
      <div class="contact__fax">
        <i class="material-icons" aria-hidden="true">fax</i>
        <a href="fax:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>
</a>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email'] && $_smarty_tpl->tpl_vars['display_email']->value) {?>
      <div class="contact__email">
        <i class="material-icons" aria-hidden="true">mail</i>
        <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email'],'encode'=>"javascript"),$_smarty_tpl);?>

      </div>
    <?php }?>

  </div>
</div>
<!-- end /var/www/html/themes/hummingbird/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
