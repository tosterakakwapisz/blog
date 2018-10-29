<?php
/* Smarty version 3.1.33, created on 2018-10-29 10:30:55
  from '/var/www/html/blog/private/templates/all_entries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd6d34ff2f4e6_04509963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6089f62cffcb5e5ad2b656ac411bdf30ab5f5011' => 
    array (
      0 => '/var/www/html/blog/private/templates/all_entries.tpl',
      1 => 1540805350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd6d34ff2f4e6_04509963 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
    <table class="table table-hover table-responsive-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">AddDate</th>
                <?php if (isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value <= 2) {?>
                    <th scope="col">Actions</th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($_smarty_tpl->tpl_vars['dae_r']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('n', 0);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dae_r']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('n', $_smarty_tpl->tpl_vars['n']->value+1);?>
                    <tr id="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['n_Title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['n_AuthorNickname'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['n_Date'];?>
</td>
                        <?php if (isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value <= 2) {?>
                            <td>
                                <button data-editid="<?php echo $_smarty_tpl->tpl_vars['r']->value['nId'];?>
" class="btn btn-outline-dark jseditentry"><i class="fas fa-edit"></i></button>
                                <button data-deleteid="<?php echo $_smarty_tpl->tpl_vars['r']->value['nId'];?>
" data-n="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" class="btn btn-outline-dark jsdeleteentry"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        <?php }?>
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
