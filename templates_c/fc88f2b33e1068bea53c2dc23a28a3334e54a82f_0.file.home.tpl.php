<?php
/* Smarty version 4.2.1, created on 2023-03-14 13:50:12
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\layout\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64106d84d70799_76956443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc88f2b33e1068bea53c2dc23a28a3334e54a82f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\layout\\home.tpl',
      1 => 1678798212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/layout/header.tpl' => 1,
    'file:templates/layout/navbar.tpl' => 1,
    'file:templates/tasks/taskList.tpl' => 1,
    'file:templates/layout/footer.tpl' => 1,
  ),
),false)) {
function content_64106d84d70799_76956443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/layout/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('username'=>$_smarty_tpl->tpl_vars['username']->value,'role'=>$_smarty_tpl->tpl_vars['role']->value), 0, false);
?>

<h1 class="text-center m-5">
    <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['title']->value ?? '', 'UTF-8');?>

</h1>


<?php $_smarty_tpl->_subTemplateRender("file:templates/tasks/taskList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tasks'=>$_smarty_tpl->tpl_vars['tasks']->value,'message'=>$_smarty_tpl->tpl_vars['message']->value,'role'=>$_smarty_tpl->tpl_vars['role']->value,'username'=>$_smarty_tpl->tpl_vars['username']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
