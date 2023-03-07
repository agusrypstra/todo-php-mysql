<?php
/* Smarty version 4.2.1, created on 2023-03-06 20:20:54
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64063d161a3050_95268602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b75d0dc2bda947130092851bbe1101c6dd072daf' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\about.tpl',
      1 => 1678130370,
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
function content_64063d161a3050_95268602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <h1>
        About
    </h1>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/layout/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
