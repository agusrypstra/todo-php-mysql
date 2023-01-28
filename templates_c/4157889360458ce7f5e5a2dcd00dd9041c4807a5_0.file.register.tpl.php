<?php
/* Smarty version 4.2.1, created on 2023-01-26 19:05:31
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63d2c0eb730c32_19791040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4157889360458ce7f5e5a2dcd00dd9041c4807a5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\register.tpl',
      1 => 1674756330,
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
function content_63d2c0eb730c32_19791040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:templates/loginNavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
      <input
        id="password"
        class="form-control"
        type="password"
        name="password"
      />
    </div>
    <div class="form-group">
      <label for="password">Repeat password</label>
      <input
        id="password"
        class="form-control"
        type="password"
        name="checkPassword"
      />
    </div>
    <button class="btn btn-primary" type="submit">Register</button>
  </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
