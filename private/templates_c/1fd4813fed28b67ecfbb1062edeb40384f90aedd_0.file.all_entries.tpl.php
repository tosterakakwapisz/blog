<?php
/* Smarty version 3.1.33, created on 2018-10-18 10:48:46
  from '/var/www/html/blog-v2/private/templates/all_entries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc848eeb966b3_83563299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd4813fed28b67ecfbb1062edeb40384f90aedd' => 
    array (
      0 => '/var/www/html/blog-v2/private/templates/all_entries.tpl',
      1 => 1539852477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc848eeb966b3_83563299 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9 col-sm-9 col-lg-9 jscontent" >
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
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['r']->value['n_Content'];?>
</p>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col text-left">
                                <div class="d-flex justify-content-between flex-wrap pt-2">
                                    <div class="">
                                        <small class="text-muted text-left">Autor: <?php echo $_smarty_tpl->tpl_vars['r']->value['n_AuthorNickname'];?>
</small>
                                    </div>
                                    <div class="pt-1 text-right flex-wrap">
                                        <div class="flex-wrap">
                                            <small class="text-muted text-right"><div>Data dodania: </div><div><?php echo $_smarty_tpl->tpl_vars['r']->value['n_Date'];?>
</div></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex pt-2">
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
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div>
<?php }
}
