<?php
/* Smarty version 3.1.33, created on 2018-10-19 11:41:33
  from '/var/www/html/blog/private/templates/all_entries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc9a6cd729394_03245634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6089f62cffcb5e5ad2b656ac411bdf30ab5f5011' => 
    array (
      0 => '/var/www/html/blog/private/templates/all_entries.tpl',
      1 => 1539941771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc9a6cd729394_03245634 (Smarty_Internal_Template $_smarty_tpl) {
?>






<div class="col-md-12 col-sm-12 col-lg-12 col-12 px-0 jscontent" >
        <?php if (isset($_smarty_tpl->tpl_vars['dae_r']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('n', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dae_r']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('n', $_smarty_tpl->tpl_vars['n']->value+1);?>
                    <div class="row pb-3 js_entry" id="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">
                        <div class="col">
                            <div class="card">
                                <div class="card-body text-left">
                                    <h4 class="card-title"><strong><?php echo $_smarty_tpl->tpl_vars['r']->value['n_Title'];?>
</strong></h4>
                                    <p class="card-text text-justify"><?php echo $_smarty_tpl->tpl_vars['r']->value['n_Content'];?>
</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col text-left">
                                            <div class="row pb-2">
                                                <div class="col-12 col-sm-6 pb-2 px-0">
                                                    <small class="text-muted text-left">
                                                        <div class="col-12">
                                                            Autor:
                                                        </div>
                                                        <div class="col-12">
                                                            <?php echo $_smarty_tpl->tpl_vars['r']->value['n_AuthorNickname'];?>

                                                        </div>
                                                    </small>
                                                </div>
                                                <div class="col-12 col-sm-6 pt-1">
                                                    <small class="text-muted wyrownanie">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                Data dodania:
                                                            </div>
                                                            <div class="col-12">
                                                                <?php echo $_smarty_tpl->tpl_vars['r']->value['n_Date'];?>

                                                            </div>
                                                        </div>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2">
                                                <?php if (isset($_smarty_tpl->tpl_vars['user_Type']->value) && $_smarty_tpl->tpl_vars['user_Type']->value <= 2) {?>
                                                <div class="">
                                                    <button data-editid="<?php echo $_smarty_tpl->tpl_vars['r']->value['nId'];?>
" class="btn btn-outline-primary mr-2 jseditentry">Edytuj</button>
                                                </div>
                                                <div class="">
                                                    <button data-deleteid="<?php echo $_smarty_tpl->tpl_vars['r']->value['nId'];?>
" data-n="<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" class="btn btn-outline-primary jsdeleteentry">Usun</button>
                                                </div>
                                                <?php }?>
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

<!--

<table>
    <tbody>
    <tr>
</tr>
</tbody>
</table>
-->
<?php }
}
