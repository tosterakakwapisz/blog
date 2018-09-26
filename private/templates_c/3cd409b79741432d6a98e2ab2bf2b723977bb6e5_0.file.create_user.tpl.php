<?php
/* Smarty version 3.1.33, created on 2018-09-26 09:43:12
  from '/var/www/html/blog/private/templates/create_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab389044b269_52457877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cd409b79741432d6a98e2ab2bf2b723977bb6e5' => 
    array (
      0 => '/var/www/html/blog/private/templates/create_user.tpl',
      1 => 1537947334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab389044b269_52457877 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9 col-lg-9">
    <form action="/create_user" method="POST">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <h4>Tworzenie uzytkownika</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-8 text-left">
                <strong><label for="NewUNickname">Nickname:</label></strong>
                <small id="NewUNicknameDescription" class="form-text text-muted">(wyswietlana nazwa uzytkownika jako autor wpisu)</small>
                <input type="text" class="form-control" id="NewUNickname" name="new_u_nick" required autofocus />
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-8 text-left">
                <strong><label for="NewULogin">Login:</label></strong>
                <small id="NewULoginDescription" class="form-text text-muted">(login sluzy tylko i wylacznie do logowania. Nie widac tego na stronie)</small>
                <input type="text" class="form-control" id="NewULogin" name="new_u_login" required autofocus />
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-8 text-left">
                <strong><label for="NewUPassword">Haslo: </label></strong>
                <small id="NewUPasswordDescription" class="form-text text-muted">NIKOMU NIE PODAWAJ HASLA!</small>
                <input type="password" class="form-control" id="NewUPassword" name="new_u_passwd" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-8 text-left">
                <h5>Typ uzytkownika</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="user_type" id="UserType1" value="1" required>
                    <label class="form-check-label" for="UserType1"> Admin </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="user_type" id="UserType2" value="2" required>
                    <label class="form-check-label" for="UserType2"> Moderator </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="user_type" id="UserType3" value="3" required checked>
                    <label class="form-check-label" for="UserType3"> Dziennikarz </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 text-left">
                <button type="submit" class="btn mr-2">Utworz uzytkownika</button>
                <a href="/" class="text-center">Anuluj</a>
            </div>
        </div>
    </form>
    <?php if (isset($_smarty_tpl->tpl_vars['formNotFilled']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['formNotFilled']->value;?>

    <?php }?>
</div>
<?php }
}
