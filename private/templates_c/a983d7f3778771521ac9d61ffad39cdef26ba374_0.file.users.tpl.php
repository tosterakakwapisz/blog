<?php
/* Smarty version 3.1.33, created on 2018-09-28 15:32:51
  from '/var/www/html/blog-v2/private/templates/users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bae2d83d9c863_86093362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a983d7f3778771521ac9d61ffad39cdef26ba374' => 
    array (
      0 => '/var/www/html/blog-v2/private/templates/users.tpl',
      1 => 1538141487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bae2d83d9c863_86093362 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9 col-lg-9">
    <div class="row pb-3">
        <?php if (isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value <= 1) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['dau_r']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dau_r']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                    <div class="col-md-6 col-lg-4 col-xl-3 pb-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="text-left col-md-6">Nickname: </div>
                                </div>
                                <div class="row">
                                    <div class="text-left col-md-12"><strong><?php echo $_smarty_tpl->tpl_vars['r']->value['u_Nickname'];?>
</strong></div>
                                </div>
                            </div>
                            <div class="card-body text-left">
                                <div class="row">
                                    <div class="text-left col-md-6">Id: </div>
                                    <div class="text-right col-md-6"><strong><?php echo $_smarty_tpl->tpl_vars['r']->value['uId'];?>
</strong></div>
                                </div>
                                <div class="row">
                                    <div class="text-left col-md-6">Typ: </div>
                                    <div class="text-right col-md-6">
                                        <strong>
                                            <?php if ($_smarty_tpl->tpl_vars['r']->value['u_UserType'] == 1) {?>
                                                Administrator
                                            <?php } elseif ($_smarty_tpl->tpl_vars['r']->value['u_UserType'] == 2) {?>
                                                Moderator
                                            <?php } elseif ($_smarty_tpl->tpl_vars['r']->value['u_UserType'] == 3) {?>
                                                Dziennikarz
                                            <?php }?>
                                        </strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-left col-md-6">Login: </div>
                                    <div class="text-right col-md-6"><strong><?php echo $_smarty_tpl->tpl_vars['r']->value['u_Login'];?>
</strong></div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="edit_user_i/<?php echo $_smarty_tpl->tpl_vars['r']->value['uId'];?>
">Edytuj</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a class="delete_user btn btn-outline-primary" id="<?php echo $_smarty_tpl->tpl_vars['r']->value['uId'];?>
">Usuń</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        <?php }?>
    </div>
</div>
<?php }
}
