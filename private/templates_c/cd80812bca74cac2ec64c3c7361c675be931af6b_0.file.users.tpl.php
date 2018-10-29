<?php
/* Smarty version 3.1.33, created on 2018-10-29 10:30:56
  from '/var/www/html/blog/private/templates/users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd6d350bb99b5_43303286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd80812bca74cac2ec64c3c7361c675be931af6b' => 
    array (
      0 => '/var/www/html/blog/private/templates/users.tpl',
      1 => 1540805453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd6d350bb99b5_43303286 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <table class="table table-hover table-responsive-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nickname</th>
                <th scope="col">Login</th>
                <th scope="col">Type</th>
                <?php if (isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value <= 2) {?>
                    <th scope="col">Actions</th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($_smarty_tpl->tpl_vars['dau_r']->value) && isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value <= 1) {?>
                <?php $_smarty_tpl->_assignInScope('n', 0);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dau_r']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('n', $_smarty_tpl->tpl_vars['n']->value+1);?>
                    <tr id="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['u_Nickname'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['u_Login'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['r']->value['u_UserType'] == 1) {?>
                                Administrator
                            <?php } elseif ($_smarty_tpl->tpl_vars['r']->value['u_UserType'] == 2) {?>
                                Moderator
                            <?php } elseif ($_smarty_tpl->tpl_vars['r']->value['u_UserType'] == 3) {?>
                                Dziennikarz
                            <?php }?>
                        </td>
                        <td>
                            <button data-editid="<?php echo $_smarty_tpl->tpl_vars['r']->value['uId'];?>
" class="btn btn-outline-dark jsedituser"><i class="fas fa-edit"></i></button>
                            <button data-deleteid="<?php echo $_smarty_tpl->tpl_vars['r']->value['uId'];?>
" data-n="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" class="btn btn-outline-dark delete_user jsdeleteuser" id="<?php echo $_smarty_tpl->tpl_vars['r']->value['uId'];?>
"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </tbody>
    </table>
</div>


<?php }
}
