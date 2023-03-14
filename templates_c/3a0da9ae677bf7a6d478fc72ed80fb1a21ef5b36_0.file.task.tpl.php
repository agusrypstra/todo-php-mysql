<?php
/* Smarty version 4.2.1, created on 2023-03-14 15:39:45
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\tasks\task.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641087314cee23_87713111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a0da9ae677bf7a6d478fc72ed80fb1a21ef5b36' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\tasks\\task.tpl',
      1 => 1678804784,
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
function content_641087314cee23_87713111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/layout/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="text-center m-5">Order n° <?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
</h1>
<div class="container text-center" id="task" data-id="<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
">
    <div class="border p-2">
        <div class="row">
            <h2 class="col-10 fs-2">
                <?php echo $_smarty_tpl->tpl_vars['task']->value->title;?>

            </h2>
            <p class="col-2 fs-5"><?php echo $_smarty_tpl->tpl_vars['task']->value->name;?>
</p>
        </div>
        <div>
            <p class="fs-4"><?php echo $_smarty_tpl->tpl_vars['task']->value->description;?>
</p>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['role']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['role']->value[0] != 0) {?>
            
                <div id="app">
                    <div>
                        <h2>Comments</h2>
                        <form method="post" id="filterForm">
                            <div class="form-group">
                                <label for="filter">Order by</label>
                                <select id="filterValue" class="form-control" name="filter">
                                    <option value="newest">Newest</option>
                                    <option value="oldest">Oldest</option>
                                    <option value="less-valued">Less valued</option>
                                    <option value="most-valued">Most valued</option>
                                </select>
                                <button class="btn btn-success" type="submit">Filter</button>
                            </div>

                        </form>
                        <div id="comments-list">
                            <ul class="list-group">
                                <li v-for="comment in comments" class="list-group-item">{{comment.comment}} || {{comment.value}} ||
                                    {{comment.date}}
                                
                                <button class="btn btn-danger p-1 m-2" v-bind:data-id='comment.comment_id'>Delete</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <form method="post" id="formComment" data-id="<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
">
                    <div class="form-group">
                        <label for="Comment">Comment</label>
                        <textarea id="comment" class="form-control" name="comment" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="value">Value</label>
                        <select id="value" class="form-control" name="value">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <button class="btn btn-success" type="submit">Send comment</button>
                </form>
            </div>
        <?php }?>
    <?php }?>
</div>
<?php echo '<script'; ?>
 src="js/Comments-main.js" type="module">
<?php $_smarty_tpl->_subTemplateRender("file:templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
