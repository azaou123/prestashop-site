<?php
/* Smarty version 4.3.4, created on 2026-02-24 06:25:08
  from '/var/www/html/themes/hummingbird/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_699d3634358cc8_73667482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98437dc18b083b5462418d39da99c609f2c47346' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/variant-links.tpl' => 1,
    'file:components/qty-input.tpl' => 1,
  ),
),false)) {
function content_699d3634358cc8_73667482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1163461532699d3634313383_82876534';
$_smarty_tpl->_assignInScope('componentName', 'product-miniature');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103130003699d3634316a95_12725131', 'product_miniature_item');
?>

<?php }
/* {block 'quick_view_touch'} */
class Block_1959667160699d3634335501_88717437 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <button class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            <?php
}
}
/* {/block 'quick_view_touch'} */
/* {block 'product_miniature_image'} */
class Block_610835711699d363431be86_72591509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__image-container thumbnail-container">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
              <picture>
                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['sources']['avif']))) {?>
                  <source
                    srcset="
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_xs']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
 120w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_m']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
 200w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
 320w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['product_main']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
 720w"
                    sizes="(min-width: 1300px) 720px, (min-width: 768px) 50vw, 50vw"
                    type="image/avif"
                  >
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['sources']['webp']))) {?>
                  <source
                    srcset="
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_xs']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
 120w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_m']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
 200w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
 320w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['product_main']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
 720w"
                    sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                    type="image/webp"
                  >
                <?php }?>

                <img
                  class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__image card-img-top"
                  srcset="
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_xs']['url'], ENT_QUOTES, 'UTF-8');?>
 120w,
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_m']['url'], ENT_QUOTES, 'UTF-8');?>
 200w,
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['url'], ENT_QUOTES, 'UTF-8');?>
 320w,
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['product_main']['url'], ENT_QUOTES, 'UTF-8');?>
 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['width'], ENT_QUOTES, 'UTF-8');?>
"
                  height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['default_md']['height'], ENT_QUOTES, 'UTF-8');?>
"
                  loading="lazy"
                  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                  title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                  data-full-size-image-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                >
              </picture>
            <?php } else { ?>
              <picture>
                <?php if ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['sources']['avif']))) {?>
                  <source
                    srcset="
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xs']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
 120w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_m']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
 200w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
 320w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['product_main']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
 720w"
                    sizes="(min-width: 1300px) 720px, (min-width: 768px) 50vw, 50vw"
                    type="image/avif"
                  >
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['sources']['webp']))) {?>
                  <source
                    srcset="
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xs']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
 120w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_m']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
 200w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
 320w,
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['product_main']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
 720w"
                    sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                    type="image/webp"
                  >
                <?php }?>

                <img
                  class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__image card-img-top"
                  srcset="
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_xs']['url'], ENT_QUOTES, 'UTF-8');?>
 120w,
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_m']['url'], ENT_QUOTES, 'UTF-8');?>
 200w,
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['url'], ENT_QUOTES, 'UTF-8');?>
 320w,
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['product_main']['url'], ENT_QUOTES, 'UTF-8');?>
 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['width'], ENT_QUOTES, 'UTF-8');?>
"
                  height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['height'], ENT_QUOTES, 'UTF-8');?>
"
                  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['default_md']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  loading="lazy"
                  alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No image available','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
                  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No image available','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
                  data-full-size-image-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                >
              </picture>
            <?php }?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1959667160699d3634335501_88717437', 'quick_view_touch', $this->tplIndex);
?>

          </div>
        <?php
}
}
/* {/block 'product_miniature_image'} */
/* {block 'quick_view'} */
class Block_1011435086699d3634337430_62086191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__quickview">
              <button class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </button>
            </div>
          <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_name'} */
class Block_1966356088699d36343388a7_23931161 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><p class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</p></a>
            <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_variants'} */
class Block_1913992856699d363433a0a0_44630321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__variants">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
                <?php }?>
              </div>
            <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_reviews'} */
class Block_161693851699d363433bd21_53606605 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price'} */
class Block_1863816422699d363433d0f8_98423218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


                  <span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
                      <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

                    <?php } else { ?>
                      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                    <?php }?>
                  </span>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                <?php }?>
              <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_discount_price'} */
class Block_959777298699d3634345ce5_88986255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                  <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__discount-price">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                      <span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__regular-price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                  </div>
                <?php }?>
              <?php
}
}
/* {/block 'product_discount_price'} */
/* {block 'product_miniature_bottom'} */
class Block_692608393699d3634336cc0_26956933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__infos card-body">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1011435086699d3634337430_62086191', 'quick_view', $this->tplIndex);
?>


          <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__infos__top">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1966356088699d36343388a7_23931161', 'product_name', $this->tplIndex);
?>

          </div>

          <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__infos__bottom">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1913992856699d363433a0a0_44630321', 'product_variants', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161693851699d363433bd21_53606605', 'product_reviews', $this->tplIndex);
?>


            <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__prices">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1863816422699d363433d0f8_98423218', 'product_price', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_959777298699d3634345ce5_88986255', 'product_discount_price', $this->tplIndex);
?>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">

                <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  <?php $_smarty_tpl->_subTemplateRender('file:components/qty-input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('attributes'=>array("id"=>"quantity_wanted_".((string)$_smarty_tpl->tpl_vars['product']->value['id_product']),"value"=>((string)$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']),"min"=>((string)$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),'marginHelper'=>"mb-0"), 0, false);
?>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                </button>
              </form>
            <?php } else { ?>
              <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-outline-primary mt-3">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See details','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </a>
            <?php }?>
          </div>
        </div>
      <?php
}
}
/* {/block 'product_miniature_bottom'} */
/* {block 'product_miniature_item'} */
class Block_103130003699d3634316a95_12725131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_103130003699d3634316a95_12725131',
  ),
  'product_miniature_image' => 
  array (
    0 => 'Block_610835711699d363431be86_72591509',
  ),
  'quick_view_touch' => 
  array (
    0 => 'Block_1959667160699d3634335501_88717437',
  ),
  'product_miniature_bottom' => 
  array (
    0 => 'Block_692608393699d3634336cc0_26956933',
  ),
  'quick_view' => 
  array (
    0 => 'Block_1011435086699d3634337430_62086191',
  ),
  'product_name' => 
  array (
    0 => 'Block_1966356088699d36343388a7_23931161',
  ),
  'product_variants' => 
  array (
    0 => 'Block_1913992856699d363433a0a0_44630321',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_161693851699d363433bd21_53606605',
  ),
  'product_price' => 
  array (
    0 => 'Block_1863816422699d363433d0f8_98423218',
  ),
  'product_discount_price' => 
  array (
    0 => 'Block_959777298699d3634345ce5_88986255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article
    class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
 js-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');
if (!empty($_smarty_tpl->tpl_vars['productClasses']->value)) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productClasses']->value, ENT_QUOTES, 'UTF-8');
}?>"
    data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
    data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
  >
    <div class="card">
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['componentName']->value, ENT_QUOTES, 'UTF-8');?>
__link">
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_610835711699d363431be86_72591509', 'product_miniature_image', $this->tplIndex);
?>

      </a>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_692608393699d3634336cc0_26956933', 'product_miniature_bottom', $this->tplIndex);
?>

    </div>
  </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
