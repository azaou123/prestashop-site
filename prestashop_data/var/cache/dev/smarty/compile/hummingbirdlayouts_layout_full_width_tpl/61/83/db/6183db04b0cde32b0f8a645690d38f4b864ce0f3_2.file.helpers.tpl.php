<?php
/* Smarty version 4.3.4, created on 2026-02-24 06:25:12
  from '/var/www/html/themes/hummingbird/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_699d3638695341_69557241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6183db04b0cde32b0f8a645690d38f4b864ce0f3' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/_partials/helpers.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699d3638695341_69557241 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/hummingbirdlayouts_layout_full_width_tpl/61/83/db/6183db04b0cde32b0f8a645690d38f4b864ce0f3_2.file.helpers.tpl.php',
    'uid' => '6183db04b0cde32b0f8a645690d38f4b864ce0f3',
    'call_name' => 'smarty_template_function_renderLogo_205298742699d363868fa10_78404115',
  ),
));
?>

<?php }
/* smarty_template_function_renderLogo_205298742699d363868fa10_78404115 */
if (!function_exists('smarty_template_function_renderLogo_205298742699d363868fa10_78404115')) {
function smarty_template_function_renderLogo_205298742699d363868fa10_78404115(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a class="navbar-brand d-block" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
"
    >
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_205298742699d363868fa10_78404115 */
}
