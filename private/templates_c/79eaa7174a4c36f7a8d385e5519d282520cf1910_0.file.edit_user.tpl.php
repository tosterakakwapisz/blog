<?php
/* Smarty version 3.1.33, created on 2018-10-19 09:55:05
  from '/var/www/html/blog/private/templates/edit_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc98dd912c433_58931018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79eaa7174a4c36f7a8d385e5519d282520cf1910' => 
    array (
      0 => '/var/www/html/blog/private/templates/edit_user.tpl',
      1 => 1539869364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc98dd912c433_58931018 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9 col-lg-9 jscontent">
    <form action="/edit_user/<?php echo $_smarty_tpl->tpl_vars['su_r']->value['uId'];?>
" id="EditUser" method="POST">
        <div class="row">
            <div class="col-md-9 col-sm-9 pb-2">
                <h4>Edycja uzytkownika</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 text-left pb-2">
                <label for="EditUNickname"><strong>Nickname: </strong></label>
                <input type="text" class="form-control" id="EditUNickname" name="edit_u_nickname" required value="<?php echo $_smarty_tpl->tpl_vars['su_r']->value['u_Nickname'];?>
"/>
            </div>
            <div class="col-md-4 col-sm-4 text-left pb-2">
                <label for="EditULogin"><strong>Login: </strong></label>
                <input class="form-control" id="EditULogin" name="edit_u_login" required value="<?php echo $_smarty_tpl->tpl_vars['su_r']->value['u_Login'];?>
"/>
            </div>
            <div class="col-md-4 col-sm-4 text-left pb-2">
                <label for="EditUPasswd"><strong>Password: </strong></label>
                <input type="password" class="form-control" id="EditUPasswd" name="edit_u_passwd"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-lg-5 text-left pb-2">
                <h5>Typ uzytkownika</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input u_type" type="radio" name="edit_u_type" id="UserType1" value="1" required>
                    <label class="form-check-label" for="UserType1"> Admin </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input u_type" type="radio" name="edit_u_type" id="UserType2" value="2" required>
                    <label class="form-check-label" for="UserType2"> Moderator </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input u_type" type="radio" name="edit_u_type" id="UserType3" value="3" required>
                    <label class="form-check-label" for="UserType3"> Dziennikarz </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 text-left py-2">
                <button type="submit" data-edituserid="<?php echo $_smarty_tpl->tpl_vars['su_r']->value['uId'];?>
" id="edituserbutton" class="btn">Zapisz zmiany</button>
                <button type="reset" class="btn">Resetuj</button>
                <a href="/users" class="text-middle px-3">Anuluj</a>
            </div>
        </div>
    </form>
</div>
<?php }
}
