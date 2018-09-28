<?php
/* Smarty version 3.1.33, created on 2018-09-28 15:29:50
  from '/var/www/html/blog-v2/private/templates/all_entries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bae2ccedc6c76_13559427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd4813fed28b67ecfbb1062edeb40384f90aedd' => 
    array (
      0 => '/var/www/html/blog-v2/private/templates/all_entries.tpl',
      1 => 1538141386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bae2ccedc6c76_13559427 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9 col-lg-9">
    <?php if (isset($_smarty_tpl->tpl_vars['dae_r']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dae_r']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
        <div class="row pb-3">
            <div class="col">
                <div class="card">
                    <div class="card-body text-left">
                        <h4 class="card-title"><strong><?php echo $_smarty_tpl->tpl_vars['r']->value['n_Title'];?>
</strong></h4>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['r']->value['n_Content'];?>
</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col text-left">
                                <div class="row">
                                    <div class="col-md-2 pt-1">
                                        <small class="text-muted text-left">Autor: <?php echo $_smarty_tpl->tpl_vars['r']->value['n_AuthorNickname'];?>
</small>
                                    </div>
                                    <?php if (isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value <= 2) {?>
                                    <div class="col-md-2">
                                        <button class="btn btn-outline-primary" href="edit_entry_i/<?php echo $_smarty_tpl->tpl_vars['r']->value['nId'];?>
">Edytuj</button>
                                    </div>
                                    <div class="offset-md-3 col-md-2">
                                        <a class="delete_entry btn btn-outline-primary" id="<?php echo $_smarty_tpl->tpl_vars['r']->value['nId'];?>
">Usun</a>
                                    </div>
                                    <?php }?>
                                    <div class="col-md-3 pt-1 text-right">
                                        <small class="text-muted text-right">Data dodania: <?php echo $_smarty_tpl->tpl_vars['r']->value['n_Date'];?>
</small>
                                    </div>
                                </div>
                            </div>
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
</div>
<?php }
}
