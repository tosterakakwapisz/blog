<?php
/* Smarty version 3.1.33, created on 2018-09-28 12:08:24
  from '/var/www/html/blog-v2/private/templates/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5badfd981e1cc6_90499494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd635405124b92d0d727380cc820ece0c39a69911' => 
    array (
      0 => '/var/www/html/blog-v2/private/templates/menu.tpl',
      1 => 1538128610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5badfd981e1cc6_90499494 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-3 col-lg-3">
    <div class="list-group">
        <a href="/" class="list-group-item list-group-item-action list-group-item-primary">Strona główna</a>
        <a href="/entries" class="list-group-item list-group-item-action">Wszystkie wpisy </a>
        <?php if ((isset($_smarty_tpl->tpl_vars['user_Type']->value) && ($_smarty_tpl->tpl_vars['user_Type']->value <= 2))) {?>
            <a href="/create_entry_i" class="list-group-item list-group-item-action">Utwórz wpis</a>
            <?php if (isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value == 1) {?>
                <a href="/create_user_i" class="list-group-item list-group-item-action">Stworz uzytkownika</a>
                <a href="/users" class="list-group-item list-group-item-action">Uzytkownicy</a>
            <?php }?>
        <?php }?>
        <a href="/logout" onClick="" class="list-group-item list-group-item-action list-group-item-secondary">Log out</a>
    </div>
</div>
<?php }
}
