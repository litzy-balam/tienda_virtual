<?php
/* Smarty version 3.1.33, created on 2020-04-30 02:23:09
  from 'C:\xampp\htdocs\ICY\admin245i7cdsf\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eaa7cdd4d3189_02535448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67e752687b37ab5ee30f089e59e2d2d0014b6d9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ICY\\admin245i7cdsf\\themes\\default\\template\\content.tpl',
      1 => 1588228751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaa7cdd4d3189_02535448 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
