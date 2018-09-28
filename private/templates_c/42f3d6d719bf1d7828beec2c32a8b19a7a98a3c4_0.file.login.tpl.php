<?php
/* Smarty version 3.1.33, created on 2018-09-27 14:20:54
  from '/var/www/html/blog-v2/private/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5baccb261015c0_92723561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f3d6d719bf1d7828beec2c32a8b19a7a98a3c4' => 
    array (
      0 => '/var/www/html/blog-v2/private/templates/login.tpl',
      1 => 1538050847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baccb261015c0_92723561 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-2 offset-md-5">
    <form class="form-signin mt-5" id="Login" method="POST" action="./">
        <label for="inputLogin" class="sr-only">Login</label>
        <input type="text" name="login" id="InputLogin" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="passwd" id="InputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
    </form>
    <div class="text-center">
        <p id="InvalidPasswd">

        </p>
        <?php if (isset($_smarty_tpl->tpl_vars['validate_pass']->value)) {?>
            <?php echo $_smarty_tpl->tpl_vars['validate_pass']->value;?>

        <?php }?>
    </div>
</div>
<?php }
}
