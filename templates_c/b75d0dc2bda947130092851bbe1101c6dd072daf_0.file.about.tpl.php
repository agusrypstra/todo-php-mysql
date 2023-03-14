<?php
/* Smarty version 4.2.1, created on 2023-03-14 14:17:39
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641073f3124a48_36397453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b75d0dc2bda947130092851bbe1101c6dd072daf' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\about.tpl',
      1 => 1678799857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/layout/header.tpl' => 1,
    'file:templates/layout/navbar.tpl' => 1,
    'file:templates/layout/footer.tpl' => 1,
  ),
),false)) {
function content_641073f3124a48_36397453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/layout/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('username'=>$_smarty_tpl->tpl_vars['username']->value), 0, false);
?>
<div>
    <h1 class="text-center">
        About
    </h1>
</div>
<div class="container">
    <h2 class="text-center mt-5">
        What does this page do?
    </h2>
    <div>
        <div class="text-center">
            <p class="fs-5">This page was create with the objetive to make easier the work on my work. It sounds
                crazy no? On my work i
                have a lot of devices to be repaired, so i decided to implement this APP to have better controll of
                these.
            </p>
        </div>
        <h3>
            Roles on this app
        </h3>
        <p class="fs-5">The APP have 3 roles. Admin, editor and viewer.</p>
        <h4>Admin</h4>
        <p class="fs-5">As admin you have the control, you can update roles and delete users at your pleasure. You can
            take orders
            and comment on them</p>
        <h4>Editor</h4>
        <p class="fs-5">As editor you have permissions like admin, with the difference that you cant administrate users
            role. You can add, take and comment orders.</p>
        <h4>Viewer</h4>
        <p class="fs-5">The role of viewer is your initial role. You need to ask the admin for permissions to start
            working. You only can see the orders and their comments, but you can't take or comment it.</p>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
