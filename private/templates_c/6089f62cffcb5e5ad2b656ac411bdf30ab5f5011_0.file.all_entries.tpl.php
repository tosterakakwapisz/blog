<?php
/* Smarty version 3.1.33, created on 2018-09-25 14:16:46
  from '/var/www/html/blog/private/templates/all_entries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5baa272e889b18_79291987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6089f62cffcb5e5ad2b656ac411bdf30ab5f5011' => 
    array (
      0 => '/var/www/html/blog/private/templates/all_entries.tpl',
      1 => 1537877703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baa272e889b18_79291987 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <small class="text-muted text-left">Autor: <?php echo $_smarty_tpl->tpl_vars['r']->value['n_AuthorNickname'];?>
</small>
                                                                <small class="text-left ml-4">
                                    <?php if (isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value <= 2) {?>
                                        <a href="edit_entry_i/<?php echo $_smarty_tpl->tpl_vars['r']->value['nId'];?>
">Edytuj</a>
                                    <?php }?>
                                </small>

                            </div>
                            <div class="col text-right">
                                <small class="text-muted text-right">Data dodania: <?php echo $_smarty_tpl->tpl_vars['r']->value['n_Date'];?>
</small>
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
