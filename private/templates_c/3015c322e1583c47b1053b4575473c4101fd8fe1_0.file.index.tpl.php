<?php
/* Smarty version 3.1.33, created on 2018-10-22 10:46:41
  from '/var/www/html/blog/private/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bcd8e7137a153_16661541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3015c322e1583c47b1053b4575473c4101fd8fe1' => 
    array (
      0 => '/var/www/html/blog/private/templates/index.tpl',
      1 => 1540197632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcd8e7137a153_16661541 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['header']->value)) {
echo $_smarty_tpl->tpl_vars['header']->value;?>

<?php }
if (isset($_smarty_tpl->tpl_vars['logged']->value) && $_smarty_tpl->tpl_vars['logged']->value == false) {?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
if (isset($_smarty_tpl->tpl_vars['logged']->value) && $_smarty_tpl->tpl_vars['logged']->value == true) {
echo $_smarty_tpl->tpl_vars['navbar']->value;?>

<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
if (isset($_smarty_tpl->tpl_vars['header']->value)) {
echo $_smarty_tpl->tpl_vars['footer']->value;?>

<?php }
}
}
