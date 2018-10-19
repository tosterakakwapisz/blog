<?php
/* Smarty version 3.1.33, created on 2018-10-18 10:08:12
  from '/var/www/html/blog-v2/private/templates/edit_entry.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc83f6c03f185_14519173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84729fdcbf0bfb18c25ed9416f5370f46c611cf9' => 
    array (
      0 => '/var/www/html/blog-v2/private/templates/edit_entry.tpl',
      1 => 1539850048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc83f6c03f185_14519173 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9 col-lg-9 jscontent">
    <form action="/edit_entry/<?php echo $_smarty_tpl->tpl_vars['se_r']->value['nId'];?>
" id="editentry" data-formid="<?php echo $_smarty_tpl->tpl_vars['se_r']->value['nId'];?>
" method="POST">
        <div class="row">
            <div class="col-md-2 col-lg-2 text-left">
                <label for="EditNewsTitle">Tytul newsa</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-lg-4">
                <textarea class="form-control" id="EditNewsTitle" name="edit_news_title" rows="1" required autofocus placeholder="Tytul"><?php echo $_smarty_tpl->tpl_vars['se_r']->value['n_Title'];?>
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
                <textarea class="form-control" id="EditNewsContent" name="edit_news_content" rows="5" required placeholder="Content"><?php echo $_smarty_tpl->tpl_vars['se_r']->value['n_Content'];?>
</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-lg-2">
                <button data-id="<?php echo $_smarty_tpl->tpl_vars['se_r']->value['nId'];?>
" id="editentrybutton" class="btn mb-2 ml-2 jseditentryquery">Zapisz newsa</button>
                <!-- <button id="editentryquery" data-buttonid="<?php echo $_smarty_tpl->tpl_vars['se_r']->value['nId'];?>
" type="submit" class="btn mb-2 ml-2">Zapisz newsa</button> -->
                <a href="/entries" class="text-middle pl-3">Anuluj</a>
            </div>
        </div>
    </form>
</div>
<?php }
}
