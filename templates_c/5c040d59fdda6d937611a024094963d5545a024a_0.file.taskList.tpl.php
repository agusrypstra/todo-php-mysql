<?php
/* Smarty version 4.2.1, created on 2023-03-14 14:40:11
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\tasks\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6410793bce2359_20148829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c040d59fdda6d937611a024094963d5545a024a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\tasks\\taskList.tpl',
      1 => 1678801211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6410793bce2359_20148829 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container text-center">
    <form action="home" method="get">
        <h1>Filter by type</h1>
        <div class="form-group">
            <label for="Type">Type</label>
            <select id="Type" class="form-control" name="type">
                <option selected="selected" value=>-</option>
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
        <button class="btn btn-primary" type="submit">Filter</button>
    </form>
    <div class="row">
        <?php ob_start();
echo count($_smarty_tpl->tpl_vars['tasks']->value);
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 0) {?>
            <h2>There's no tasks</h2>
            <?php }?>
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
' class="text-decoration-none">
                                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['task']->value->title;?>
</h5>
                                </a>
                                <h6><?php echo $_smarty_tpl->tpl_vars['task']->value->name;?>
</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Order n° <?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
</h6>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['task']->value->description;?>
</p>
                                <p>Priority: <?php echo $_smarty_tpl->tpl_vars['task']->value->priority;?>
</p>

                    <?php if ($_smarty_tpl->tpl_vars['role']->value[0] != 0) {?>
                                    <a href='deleteTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
' class="btn btn-danger">Delete</a>
                                    <a href='updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
/1' class="btn btn-secondary">Take task</a>

                    <?php }?>
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
                                <a href='task/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
' class="text-decoration-none">
                                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['task']->value->title;?>
</h5>
                                </a>
                                <p><?php echo $_smarty_tpl->tpl_vars['task']->value->name;?>
</p>
                                <h6 class="card-subtitle mb-2 text-muted">Order n° <?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
 - taken by <?php echo $_smarty_tpl->tpl_vars['task']->value->email;?>
</h6>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['task']->value->description;?>
</p>
                                <p>Priority: <?php echo $_smarty_tpl->tpl_vars['task']->value->priority;?>
</p>

                    <?php if ($_smarty_tpl->tpl_vars['task']->value->email == $_smarty_tpl->tpl_vars['username']->value) {?>
                                    <a href='updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
/0' class="btn btn-secondary">Leave order</a>
                                    <a href='updateTask/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
/2' class="btn btn-secondary">End task</a>

                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['role']->value[0] == 2) {?>
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
                                <a href='task/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
' class="text-decoration-none">
                                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['task']->value->title;?>
</h5>
                                </a>
                                <p><?php echo $_smarty_tpl->tpl_vars['task']->value->name;?>
</p>
                                <h6 class="card-subtitle mb-2 text-muted">Order n° <?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
</h6>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['task']->value->description;?>
</p>
                                <p>Finished by <?php echo $_smarty_tpl->tpl_vars['task']->value->email;?>
</p>

                    <?php if ($_smarty_tpl->tpl_vars['role']->value[0] != 0) {?>
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
        </div>
    </div><?php }
}
