<?php
/* Smarty version 4.2.1, created on 2023-02-11 18:27:30
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e7d002cea568_79217339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e257f41ce07ab763c843da9ffa62c9c7d5cf83' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\taskList.tpl',
      1 => 1676136450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/navbar.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63e7d002cea568_79217339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center m-5">
    <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['title']->value ?? '', 'UTF-8');?>

</h1>

<?php $_smarty_tpl->_subTemplateRender("file:templates/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('username'=>$_smarty_tpl->tpl_vars['username']->value), 0, false);
?>
<div class="container text-center">
    <div class="row">
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
            <div class="form-group">
                <label for="category">Device type</label>
                <select id="category" class="form-control" name="category">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <option value='<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
'><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Add order</button>
        </form>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <h2>Pending</h2>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['task']->value->status_id == 0) {?>
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <a href='task/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
'>
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['task']->value->title;?>
</h5>
                            </a>
                            <h6 class="card-subtitle mb-2 text-muted">Order n° <?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
</h6>
                            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['task']->value->description;?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['task']->value->priority;?>
</p>
                            <a href='deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
' class="btn btn-danger">Delete</a>
                            <a href='updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
/1' class="btn btn-secondary">Take task</a>
                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="col">
            <h2>In course</h2>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['task']->value->status_id == 1) {?>
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['task']->value->title ?? '', 'UTF-8');?>
</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Order n° <?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
</h6>
                            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['task']->value->description;?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['task']->value->priority;?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['task']->value->name;?>
</p>
                            <a href='updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
/0' class="btn btn-secondary">Leave order</a>
                            <a href='updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
/2' class="btn btn-secondary">End task</a>
                            <?php if ($_smarty_tpl->tpl_vars['role']->value == 2) {?>
                                <a href='deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
' class="btn btn-danger">Delete</a>
                            <?php }?>
                        </div>
                    </div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="col">
            <h2>Finished</h2>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['task']->value->status_id == 2) {?>
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['task']->value->title ?? '', 'UTF-8');?>
</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Order n° <?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
</h6>
                            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['task']->value->description;?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['task']->value->priority;?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['task']->value->name;?>
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
