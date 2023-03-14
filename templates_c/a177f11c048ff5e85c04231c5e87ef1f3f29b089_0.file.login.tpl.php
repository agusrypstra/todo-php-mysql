<?php
/* Smarty version 4.2.1, created on 2023-01-26 19:05:50
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d2c0fe059409_52918726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a177f11c048ff5e85c04231c5e87ef1f3f29b089' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\login.tpl',
      1 => 1674756348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/loginNavbar.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63d2c0fe059409_52918726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/loginNavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
      <input
        id="password"
        class="form-control"
        type="password"
        name="password"
      />
    </div>
    <button class="btn btn-primary" type="submit">Login</button>
  </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
