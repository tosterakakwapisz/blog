<?php
/* Smarty version 3.1.33, created on 2018-09-25 14:16:46
  from '/var/www/html/blog/private/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5baa272e8ce164_64323802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7099fb2eebc6717b23d453f989191542c3021cf1' => 
    array (
      0 => '/var/www/html/blog/private/templates/footer.tpl',
      1 => 1537877801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baa272e8ce164_64323802 (Smarty_Internal_Template $_smarty_tpl) {
?>        </div>
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['creation_success']->value) && $_smarty_tpl->tpl_vars['creation_success']->value == true) {?>
        <?php echo '<script'; ?>
>
            alert("Pomyslnie dodano wpis.");
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['update_success']->value) && $_smarty_tpl->tpl_vars['update_success']->value == true) {?>
        <?php echo '<script'; ?>
>
            alert("Pomyslnie edytowano wpis.");
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['create_user_success']->value) && $_smarty_tpl->tpl_vars['create_user_success']->value == true) {?>
        <?php echo '<script'; ?>
>
            alert("Pomyslnie dodano uzytkownika.");
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['update_user_success']->value) && $_smarty_tpl->tpl_vars['update_user_success']->value == true) {?>
        <?php echo '<script'; ?>
>
            alert("Pomyslnie edytowano uzytkownika.");
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
