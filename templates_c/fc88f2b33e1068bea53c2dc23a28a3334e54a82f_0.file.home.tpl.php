<?php
/* Smarty version 4.2.1, created on 2023-03-06 21:33:35
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\layout\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64064e1f4b96f0_68602793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc88f2b33e1068bea53c2dc23a28a3334e54a82f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\layout\\home.tpl',
      1 => 1678134814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/layout/header.tpl' => 1,
    'file:templates/layout/navbar.tpl' => 1,
    'file:templates/tasks/form.tpl' => 1,
    'file:templates/tasks/taskList.tpl' => 1,
    'file:templates/layout/footer.tpl' => 1,
  ),
),false)) {
function content_64064e1f4b96f0_68602793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center m-5">
    <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['title']->value ?? '', 'UTF-8');?>

</h1>

<?php $_smarty_tpl->_subTemplateRender("file:templates/layout/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/tasks/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['message']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/tasks/taskList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tasks'=>$_smarty_tpl->tpl_vars['tasks']->value), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
