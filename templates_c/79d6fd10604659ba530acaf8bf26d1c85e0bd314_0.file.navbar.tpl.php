<?php
/* Smarty version 4.2.1, created on 2023-02-02 19:08:06
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63dbfc06edc6a1_82609365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79d6fd10604659ba530acaf8bf26d1c85e0bd314' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\navbar.tpl',
      1 => 1675361285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63dbfc06edc6a1_82609365 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar" style="background-color: #9CE2EE;">
  <div class="container-fluid">
    <a class="nav-link" href="home">Home</a>
    <a class="nav-link" href="home-csr">Home CSR</a>
    <a class="nav-link" href="about">About</a>
    <a class="nav-link" href="editCategories">Edit categories</a>
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
