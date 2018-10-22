<?php
/* Smarty version 3.1.33, created on 2018-10-22 14:30:09
  from '/var/www/html/blog/private/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bcdc2d1611f80_25485794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '312f8f4155619f785014078964e2b11a044f1485' => 
    array (
      0 => '/var/www/html/blog/private/templates/menu.tpl',
      1 => 1540211406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcdc2d1611f80_25485794 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-2 col-sm-2 pb-3">
    <div class="list-group">
        <button id="mainpagenav"  class="list-group-item list-group-item-action list-group-item-secondary pointer mojemenu">Strona główna</button>
        <button id="allentriesnav"  class="list-group-item list-group-item-action list-group-item-secondary pointer mojemenu">Wpisy</button>
        <?php if ((isset($_smarty_tpl->tpl_vars['user_Type']->value) && ($_smarty_tpl->tpl_vars['user_Type']->value <= 2))) {?>
            <button id="createentryinterface"  class="list-group-item list-group-item-action list-group-item-secondary pointer mojemenu">Utwórz wpis</button>
            <?php if (isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value == 1) {?>
                <button id="createuserinterface"  class="list-group-item list-group-item-action list-group-item-secondary pointer mojemenu">Stworz usera</button>
                <button id="displayusers"  class="list-group-item list-group-item-action list-group-item-secondary pointer mojemenu">Uzytkownicy</button>
            <?php }?>
        <?php }?>
        <button id="logout"  class="list-group-item list-group-item-action list-group-item-dark pointer">Log out</button>
    </div>
</div>
<div class=" col-md-10 col-sm-2 jscontent">
<?php }
}
