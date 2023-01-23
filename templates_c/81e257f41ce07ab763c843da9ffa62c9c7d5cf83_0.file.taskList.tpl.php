<?php
/* Smarty version 4.2.1, created on 2023-01-21 02:44:40
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63cb4388225c32_27719173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e257f41ce07ab763c843da9ffa62c9c7d5cf83' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\taskList.tpl',
      1 => 1674265456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63cb4388225c32_27719173 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>
    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

</h1>
<div class="">
    <form method="post" action="createTask">
        <h2>Enter your task</h2>
        <input name="title" type="text" placeholder="Title" />
        <input name="description" type="text" placeholder="Description" />
        <input name="priority" type="text" placeholder="Priority" />
        <label for="finished">Finished</label>
        <input name="finished" type="checkbox" placeholder="Finished" />
        <button>Add</button>
    </form>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
            <h1><?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
</h1>
            <p><?php echo $_smarty_tpl->tpl_vars['task']->value->title;?>
</p>
            <a href='deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
'>Delete</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
}
}
