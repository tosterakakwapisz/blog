<?php
/* Smarty version 3.1.33, created on 2018-09-27 09:44:27
  from '/var/www/html/blog-v2/private/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bac8a5b852c85_01814740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983e9e361461e0633919f9f903d5a1f0fe91a45f' => 
    array (
      0 => '/var/www/html/blog-v2/private/templates/index.tpl',
      1 => 1537861820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bac8a5b852c85_01814740 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['header']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['logged']->value) && $_smarty_tpl->tpl_vars['logged']->value == false) {?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
if (isset($_smarty_tpl->tpl_vars['logged']->value) && $_smarty_tpl->tpl_vars['logged']->value == true) {
echo $_smarty_tpl->tpl_vars['navbar']->value;?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
echo $_smarty_tpl->tpl_vars['footer']->value;?>

<?php }
}
