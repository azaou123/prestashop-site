<?php
/* Smarty version 4.3.4, created on 2026-02-24 06:25:12
  from '/var/www/html/themes/hummingbird/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_699d36386661a1_73226164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bf5a8f034c3e167f68b458964cc767ffd9dcb73' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/index.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_699d36386661a1_73226164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1212641196699d3638657a51_41074463', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66609253699d36386585b1_17403480', 'content_columns');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'breadcrumb'} */
class Block_1212641196699d3638657a51_41074463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_1212641196699d3638657a51_41074463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'breadcrumb'} */
/* {block 'left_column'} */
class Block_1784600166699d3638659185_00495289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'page_title'} */
class Block_1641664577699d363865e2f5_87026062 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <header class="page-header">
                <h1 class="h1"><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
              </header>
            <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_545853724699d363865d644_21775290 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1641664577699d363865e2f5_87026062', 'page_title', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1999878585699d3638660aa2_12100332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1386786993699d3638661767_73403385 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

                <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1429541432699d3638661297_90687631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1386786993699d3638661767_73403385', 'hook_home', $this->tplIndex);
?>

              <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_847148046699d3638660502_49821895 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content page-home">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1999878585699d3638660aa2_12100332', 'page_content_top', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1429541432699d3638661297_90687631', 'page_content', $this->tplIndex);
?>

            </section>
          <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1315470371699d3638663d56_90731532 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <!-- Footer content -->
              <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1729604793699d3638663805_68543758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1315470371699d3638663d56_90731532', 'page_footer', $this->tplIndex);
?>

            </footer>
          <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_567735184699d363865cb00_20772516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- TODO INSIDE -->
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_545853724699d363865d644_21775290', 'page_header_container', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_847148046699d3638660502_49821895', 'page_content_container', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1729604793699d3638663805_68543758', 'page_footer_container', $this->tplIndex);
?>

        <!-- TODO INSIDE -->
      <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_1107331640699d363865ae57_53022055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="wrapper__content">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_567735184699d363865cb00_20772516', 'content', $this->tplIndex);
?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'content_wrapper'} */
/* {block 'right_column'} */
class Block_358398003699d3638665695_05986507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_columns'} */
class Block_66609253699d36386585b1_17403480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_columns' => 
  array (
    0 => 'Block_66609253699d36386585b1_17403480',
  ),
  'left_column' => 
  array (
    0 => 'Block_1784600166699d3638659185_00495289',
  ),
  'content_wrapper' => 
  array (
    0 => 'Block_1107331640699d363865ae57_53022055',
  ),
  'content' => 
  array (
    0 => 'Block_567735184699d363865cb00_20772516',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_545853724699d363865d644_21775290',
  ),
  'page_title' => 
  array (
    0 => 'Block_1641664577699d363865e2f5_87026062',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_847148046699d3638660502_49821895',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1999878585699d3638660aa2_12100332',
  ),
  'page_content' => 
  array (
    0 => 'Block_1429541432699d3638661297_90687631',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1386786993699d3638661767_73403385',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1729604793699d3638663805_68543758',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1315470371699d3638663d56_90731532',
  ),
  'right_column' => 
  array (
    0 => 'Block_358398003699d3638665695_05986507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1784600166699d3638659185_00495289', 'left_column', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1107331640699d363865ae57_53022055', 'content_wrapper', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_358398003699d3638665695_05986507', 'right_column', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content_columns'} */
}
