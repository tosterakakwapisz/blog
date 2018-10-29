<?php
/* Smarty version 3.1.33, created on 2018-10-29 10:40:06
  from '/var/www/html/blog/private/templates/create_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd6d57682f025_44257153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cd409b79741432d6a98e2ab2bf2b723977bb6e5' => 
    array (
      0 => '/var/www/html/blog/private/templates/create_user.tpl',
      1 => 1540806000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd6d57682f025_44257153 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-12 col-lg-12">
    <form action="/create_user" id="CreateUser" method="POST">
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
                <h4>Tworzenie uzytkownika</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 text-left">
                <label for="NewUNickname">
                    <strong>Nickname:</strong>
                    <small id="NewUNicknameDescription" class="form-text text-muted">(wyswietlana nazwa, np. jako autor wpisu)</small>
                </label>
                <input type="text" class="form-control" id="NewUNickname" name="new_u_nick" required autofocus />
            </div>
            <div class="col-md-4 col-lg-4 text-left">
                <strong><label for="NewULogin">Login:</label></strong>
                <small id="NewULoginDescription" class="form-text text-muted">(login sluzy tylko i wylacznie do logowania)</small>
                <input type="text" class="form-control" id="NewULogin" name="new_u_login" required/>
            </div>
            <div class="col-md-4 col-lg-4 text-left">
                <strong><label for="NewUPassword">Haslo: </label></strong>
                <small id="NewUPasswordDescription" class="form-text text-muted">NIKOMU NIE PODAWAJ HASLA!</small>
                <input type="password" class="form-control" id="NewUPassword" name="new_u_passwd" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-3 text-left">
                <h5>Typ uzytkownika</h5>
                <div class="form-check">
                    <input class="form-check-input user_type" type="radio" name="user_type" id="UserType1" value="1" required>
                    <label class="form-check-label" for="UserType1"> Admin </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input user_type" type="radio" name="user_type" id="UserType2" value="2" required>
                    <label class="form-check-label" for="UserType2"> Moderator </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input user_type" type="radio" name="user_type" id="UserType3" value="3" required checked>
                    <label class="form-check-label" for="UserType3"> Dziennikarz </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1 col-sm-5 col-md-5 col-lg-2 offset-lg-0 pt-2">
                <div class="row">
                    <div class="col-6 text-center">
                        <button type="submit" class="btn btn-outline-dark m-1">Stwórz</button>
                    </div>
                    <div class="col-6 text-center">
                        <button class="btn btn-outline-dark m-1" id="cu_abort">Anuluj</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php if (isset($_smarty_tpl->tpl_vars['formNotFilled']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['formNotFilled']->value;?>

    <?php }?>
</div>
<?php }
}
