<?php
/* Smarty version 3.1.33, created on 2018-10-19 08:22:11
  from '/var/www/html/blog/private/templates/new_entry.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc978132f22a4_82311717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd60284ef14b52ab256011508ea5c59058da0ce03' => 
    array (
      0 => '/var/www/html/blog/private/templates/new_entry.tpl',
      1 => 1539778197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc978132f22a4_82311717 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-9 col-lg-9 jscontent">
    <form action="./create_entry" id="NewEntry" method="POST">
        <div class="row">
            <div class="col-md-2 col-lg-2 text-left">
                <label for="NewsTitle">Tytul newsa</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-lg-4">
                <textarea class="form-control" id="NewsTitle" name="news_title" rows="1" required autofocus></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-lg-2 text-left">
                <label for="NewsContent">Tresc newsa</label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-10 col-lg-10">
                <textarea class="form-control" id="NewsContent" name="news_content" rows="5" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 col-lg-1">
                <button type="submit" class="btn btn-primary mb-2 ml-2">Zapisz newsa</button>
            </div>
        </div>
    </form>

    <?php if (isset($_smarty_tpl->tpl_vars['noTitleOrContent']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['noTitleOrContent']->value;?>

    <?php }?>
</div>
<?php }
}
