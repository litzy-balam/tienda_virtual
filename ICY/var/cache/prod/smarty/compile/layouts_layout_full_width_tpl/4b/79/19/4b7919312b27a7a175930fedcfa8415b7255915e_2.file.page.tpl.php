<?php
/* Smarty version 3.1.33, created on 2020-04-30 02:24:42
  from 'C:\xampp\htdocs\ICY\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eaa7d3acebac6_96659532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b7919312b27a7a175930fedcfa8415b7255915e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ICY\\themes\\classic\\templates\\page.tpl',
      1 => 1588228746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaa7d3acebac6_96659532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19931530125eaa7d3ace39d0_89213319', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_13124561915eaa7d3ace46d8_81334115 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_6788089965eaa7d3ace3ff0_44273066 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13124561915eaa7d3ace46d8_81334115', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1651176895eaa7d3ace93c4_66421496 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12464091475eaa7d3ace9c05_57722193 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_162905925eaa7d3ace8e13_88219681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1651176895eaa7d3ace93c4_66421496', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12464091475eaa7d3ace9c05_57722193', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_2429905315eaa7d3aceacd9_60396171 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16219126745eaa7d3acea7c9_59512058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2429905315eaa7d3aceacd9_60396171', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_19931530125eaa7d3ace39d0_89213319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19931530125eaa7d3ace39d0_89213319',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_6788089965eaa7d3ace3ff0_44273066',
  ),
  'page_title' => 
  array (
    0 => 'Block_13124561915eaa7d3ace46d8_81334115',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_162905925eaa7d3ace8e13_88219681',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1651176895eaa7d3ace93c4_66421496',
  ),
  'page_content' => 
  array (
    0 => 'Block_12464091475eaa7d3ace9c05_57722193',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16219126745eaa7d3acea7c9_59512058',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2429905315eaa7d3aceacd9_60396171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6788089965eaa7d3ace3ff0_44273066', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162905925eaa7d3ace8e13_88219681', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16219126745eaa7d3acea7c9_59512058', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
