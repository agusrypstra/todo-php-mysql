<?php
/* Smarty version 4.2.1, created on 2023-01-23 03:38:24
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63cdf32006cec9_11788683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e257f41ce07ab763c843da9ffa62c9c7d5cf83' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\taskList.tpl',
      1 => 1674441503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63cdf32006cec9_11788683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="">
    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

</h1>
<div class="container text-center">
    <div class="row">
        <div class="col-4">
            <form method="post" action="createTask">
                <div class="form-group">
                    <label for="title">Text</label>
                    <input id="title" class="form-control" type="Title" name="title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input id="description" class="form-control" type="text" name="description">
                </div>
                <div class="form-group">
                    <label for="priority">Priority</label>
                    <input id="priority" class="form-control" type="number" name="priority">
                </div>
                <button class="btn btn-primary" type="submit">Add order</button>
            </form>
        </div>
        <div class="col-8">
            <div class="container text-center">
                <h1>Pending orders</h1>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                        <?php if (!$_smarty_tpl->tpl_vars['task']->value->finished) {?>
                            <div class="card m-2" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['task']->value->title;?>
</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Order n° <?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
</h6>
                                    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['task']->value->description;?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['task']->value->priority;?>
</p>
                                    <a href='deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
' class="btn btn-danger">Delete</a>
                                    <?php if (!$_smarty_tpl->tpl_vars['task']->value->finished) {?>
                                        <a href='updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
' class="btn btn-secondary">End task</a>
                                    <?php } else { ?>
                                        <a href='updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
' class="btn btn-secondary disabled">End task</a>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h1>Orders history</h1>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['task']->value->finished) {?>
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['task']->value->title;?>
</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Order n° <?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
</h6>
                            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['task']->value->description;?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['task']->value->priority;?>
</p>
                            <a href='deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
' class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
}
}
