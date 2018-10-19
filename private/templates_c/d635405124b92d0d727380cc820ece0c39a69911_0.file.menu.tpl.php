<?php
/* Smarty version 3.1.33, created on 2018-10-18 12:12:54
  from '/var/www/html/blog-v2/private/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc85ca6e90f43_82046338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd635405124b92d0d727380cc820ece0c39a69911' => 
    array (
      0 => '/var/www/html/blog-v2/private/templates/menu.tpl',
      1 => 1539857572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc85ca6e90f43_82046338 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-2 col-sm-2">
    <div class="list-group">
        <button id="mainpagenav" class="list-group-item list-group-item-action list-group-item-primary btn btn-outline-primary">Strona główna</button>
        <button id="allentriesnav" class="list-group-item list-group-item-action btn ">Wpisy</button>
        <?php if ((isset($_smarty_tpl->tpl_vars['user_Type']->value) && ($_smarty_tpl->tpl_vars['user_Type']->value <= 2))) {?>
            <button id="createentryinterface" class="list-group-item list-group-item-action btn">Utwórz wpis</button>
            <?php if (isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value == 1) {?>
                <button id="createuserinterface" class="list-group-item list-group-item-action btn">Stworz usera</button>
                <button id="displayusers" class="list-group-item list-group-item-action btn">Uzytkownicy</button>
            <?php }?>
        <?php }?>
        <button id="logout" class="list-group-item list-group-item-action list-group-item-secondary btn">Log out</button>
    </div>
</div>
<?php }
}
