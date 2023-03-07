<?php
/* Smarty version 4.2.1, created on 2023-02-06 18:27:19
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\vue\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e138773049c2_36067034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5d507c0a611649eaf645d95b2a1903dde74c295' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\vue\\taskList.tpl',
      1 => 1675553973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e138773049c2_36067034 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="app">
        <ul class="list-group">
            <li v-for="task in tasks" class="list-group-item">
                {{task.title}} | {{task.description}}
            </li>
        </ul>
    </div>
<?php }
}
