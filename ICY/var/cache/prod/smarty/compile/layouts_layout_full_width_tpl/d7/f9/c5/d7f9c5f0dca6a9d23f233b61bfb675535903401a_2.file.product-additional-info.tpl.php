<?php
/* Smarty version 3.1.33, created on 2020-05-01 18:34:53
  from 'C:\xampp\htdocs\ICY\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eacb21d8fe5a7_56918372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f9c5f0dca6a9d23f233b61bfb675535903401a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ICY\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1588228746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eacb21d8fe5a7_56918372 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
