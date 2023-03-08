<?php
/* Smarty version 4.2.1, created on 2023-03-08 00:58:04
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\layout\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6407cf8c267073_27649348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4db26d5cb7dde234beb20c15b7192e2c2320337' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\layout\\navbar.tpl',
      1 => 1678233482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6407cf8c267073_27649348 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar" style="background-color: #9CE2EE;">
  <div class="container-fluid">
    <a class="nav-link" href="home">Home</a>
    <a class="nav-link" href="about">About</a>
    <?php if ($_smarty_tpl->tpl_vars['role']->value == 2 || $_smarty_tpl->tpl_vars['role']->value == 1) {?>
      <a class="nav-link" href="form">Add task</a>
    <?php }?>
    <?php $_prefixVariable1 = 2;
$_smarty_tpl->_assignInScope('role', $_prefixVariable1);
if ($_prefixVariable1) {?>
      <a class="nav-link" href="users">Users</a>
    <?php }?>
    <form class="d-flex" action="logout" method="post">
      <button class="btn btn-outline-danger" type="submit">Logout</button>
    </form>
  </div>
</nav><?php }
}
