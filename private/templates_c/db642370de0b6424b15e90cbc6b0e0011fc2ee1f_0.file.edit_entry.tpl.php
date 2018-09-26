<?php
/* Smarty version 3.1.33, created on 2018-09-25 13:54:08
  from '/var/www/html/blog/private/templates/edit_entry.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5baa21e0d1d225_01407291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db642370de0b6424b15e90cbc6b0e0011fc2ee1f' => 
    array (
      0 => '/var/www/html/blog/private/templates/edit_entry.tpl',
      1 => 1537876377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baa21e0d1d225_01407291 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9 col-lg-9">
    <form action="/edit_entry/<?php echo $_smarty_tpl->tpl_vars['se_r']->value['nId'];?>
" method="POST">
        <div class="row">
            <div class="col-md-2 col-lg-2 text-left">
                <label for="EditNewsTitle">Tytul newsa</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-lg-4">
                <textarea class="form-control" id="EditNewsTitle" name="edit_news_title" rows="1" required autofocus ><?php echo $_smarty_tpl->tpl_vars['se_r']->value['n_Title'];?>
</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-lg-2 text-left">
                <label for="EditNewsContent">Tresc newsa</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10 col-lg-10">
                <textarea class="form-control" id="EditNewsContent" name="edit_news_content" rows="5" required><?php echo $_smarty_tpl->tpl_vars['se_r']->value['n_Content'];?>
</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-lg-2">
                <button type="submit" class="btn mb-2 ml-2">Zapisz newsa</button>
                <a href="/entries" class="text-middle pl-3">Anuluj</a>
            </div>
        </div>
    </form>
</div>
<?php }
}
