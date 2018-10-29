<?php
/* Smarty version 3.1.33, created on 2018-10-29 13:17:50
  from '/var/www/html/blog/private/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd6fa6ed91a37_06156317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '312f8f4155619f785014078964e2b11a044f1485' => 
    array (
      0 => '/var/www/html/blog/private/templates/menu.tpl',
      1 => 1540815469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd6fa6ed91a37_06156317 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-12 col-sm-12 col-md-3 sidebar pb-3">
    <div class="sidebar-sticky">
        <ul class="nav flex-column nav-pills">
            <li class="nav-item"><a id="mainpagenav" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer"> Strona główna</a></li>
            <li class="nav-item nav-item-dark"><a id="allentriesnav" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Wpisy</a></li>
            <?php if ((isset($_smarty_tpl->tpl_vars['user_Type']->value) && ($_smarty_tpl->tpl_vars['user_Type']->value <= 2))) {?>
                <li class="nav-item"><a id="createentryinterface" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Utwórz wpis</a></li>
                <?php if (isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value == 1) {?>
                    <li class="nav-item"><a id="createuserinterface" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Stwórz usera</a></li>
                    <li class="nav-item"><a id="displayusers" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Użytkownicy</a></li>
                <?php }?>
            <?php }?>
            <li class="nav-item"><a id="logout" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Log out</a></li>
        </ul>
    </div>
</div>
<div class="col-12 col-sm-12 col-md-9 " id="jscontent">
</div>








<?php }
}
