<?php
/* Smarty version 3.1.33, created on 2018-09-27 10:43:46
  from '/var/www/html/blog-v2/private/templates/test-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bac98420e9600_10322224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a92acfae4d500973b3cea67dd5f6e66825f2ae3' => 
    array (
      0 => '/var/www/html/blog-v2/private/templates/test-form.tpl',
      1 => 1538037816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bac98420e9600_10322224 (Smarty_Internal_Template $_smarty_tpl) {
?><form  id="test-form">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" id="test-submit" class="btn btn-primary">Submit</button>
</form>
<?php }
}
