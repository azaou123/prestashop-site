<?php
/* Smarty version 4.3.4, created on 2026-02-24 06:25:12
  from '/var/www/html/themes/hummingbird/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_699d363874fe38_19389215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '478f968f14d31a6e4abcfb4b234903beac7ac1fc' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/_partials/header.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699d363874fe38_19389215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('headerTopName', 'header-top');
$_smarty_tpl->_assignInScope('headerBottomName', 'header-bottom');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1422243244699d3638746655_32468910', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1112713036699d3638747648_32818748', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1278981003699d3638749361_55644435', 'header_bottom');
?>

<?php }
/* {block 'header_banner'} */
class Block_1422243244699d3638746655_32468910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_1422243244699d3638746655_32468910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header__banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_1112713036699d3638747648_32818748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_1112713036699d3638747648_32818748',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['headerTopName']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="container-md">
      <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['headerTopName']->value, ENT_QUOTES, 'UTF-8');?>
-desktop d-none d-md-flex row">
        <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['headerTopName']->value, ENT_QUOTES, 'UTF-8');?>
__left col-md-5">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

        </div>

        <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['headerTopName']->value, ENT_QUOTES, 'UTF-8');?>
__right col-md-7">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

        </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_bottom'} */
class Block_1278981003699d3638749361_55644435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_bottom' => 
  array (
    0 => 'Block_1278981003699d3638749361_55644435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['headerBottomName']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="container-md <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['headerBottomName']->value, ENT_QUOTES, 'UTF-8');?>
__container">
      <div class="row gx-2 align-items-stretch <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['headerBottomName']->value, ENT_QUOTES, 'UTF-8');?>
__row">
        <div class="d-flex align-items-center col-auto logo order-xl-1 ms-lg-0 ms-2 me-lg-0 me-auto">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?><h1 class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['headerBottomName']->value, ENT_QUOTES, 'UTF-8');?>
__h1 mb-0"><?php }?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?></h1><?php }?>
          <?php }?>
        </div>

        <div class="search__mobile d-md-none d-flex col-auto">

          <div class="header-block d-flex align-items-center">
            <a class="header-block__action-btn" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#searchCanvas" aria-controls="searchCanvas" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show search bar','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
              <span class="material-icons header-block__icon">search</span>
            </a>
          </div>

          <div class="search__offcanvas js-search-offcanvas offcanvas offcanvas-top h-auto" data-bs-backdrop="false" data-bs-scroll="true" tabindex="-1" id="searchCanvas" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
              <div id="_mobile_search" class="search__container"></div>
              <button type="button" class="btn-close text-reset ms-1" data-bs-dismiss="offcanvas" aria-label="Close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</button>
            </div>
          </div>
        </div>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>


        <div id="_mobile_user_info" class="d-md-none d-flex col-auto">
                    <div class="header-block">
            <span class="header-block__action-btn">
              <i class="material-icons header-block__icon" aria-hidden="true">&#xE7FD;</i>
              <span class="d-none d-md-inline header-block__title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
            </span>
          </div>
                  </div>

        <div id="_mobile_cart" class="d-md-none col-auto d-flex">
                    <div class="header-block d-flex align-items-center">
            <span class="header-block__action-btn">
              <i class="material-icons header-block__icon" aria-hidden="true">shopping_cart</i>
              <span class="header-block__badge"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
            </span>
          </div>
                  </div>
      </div>
    </div>
  </div>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_bottom'} */
}
