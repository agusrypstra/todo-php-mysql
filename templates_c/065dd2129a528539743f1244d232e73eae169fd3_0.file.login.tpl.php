<?php
/* Smarty version 4.2.1, created on 2023-03-06 02:56:52
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\user\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64054864cdf055_99551987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '065dd2129a528539743f1244d232e73eae169fd3' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\user\\login.tpl',
      1 => 1678067809,
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
function content_64054864cdf055_99551987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/layout/loginNavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container text-center md">
  <h1>Login</h1>
  <form method="post" action="verifyLogin" class="m-2">
    <div class="form-group">
      <label for="email">Email</label>
      <input id="email" class="form-control" type="text" name="email" />
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input id="password" class="form-control" type="password" name="password" />
    </div>
    <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
      <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
    <?php }?>
    <button class="btn btn-primary" type="submit">Login</button>
  </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
