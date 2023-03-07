<?php
/* Smarty version 4.2.1, created on 2023-03-06 03:11:46
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\user\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64054be21d58c1_69586377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84cdd36b8017848a76e024a031e4687890985e53' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\user\\register.tpl',
      1 => 1678068704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/layout/header.tpl' => 1,
    'file:templates/layout/loginNavbar.tpl' => 1,
    'file:templates/layout/footer.tpl' => 1,
  ),
),false)) {
function content_64054be21d58c1_69586377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/layout/loginNavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container text-center">
  <h1>Register</h1>
  <form method="post" action="verifyRegistration" class="m-2">
    <div class="form-group">
      <label for="email">Email</label>
      <input id="email" class="form-control" type="text" name="email" />
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input id="password" class="form-control" type="password" name="password" />
    </div>
    <div class="form-group">
      <label for="password">Repeat password</label>
      <input id="password" class="form-control" type="password" name="checkPassword" />
    </div>
    <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
      <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
    <?php }?>
    <button class="btn btn-primary" type="submit">Register</button>
  </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
