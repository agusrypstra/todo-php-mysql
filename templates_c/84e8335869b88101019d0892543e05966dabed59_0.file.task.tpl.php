<?php
/* Smarty version 4.2.1, created on 2023-02-10 19:04:27
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\task.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e6872be5b869_40215743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84e8335869b88101019d0892543e05966dabed59' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\task.tpl',
      1 => 1676051634,
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
function content_63e6872be5b869_40215743 (Smarty_Internal_Template $_smarty_tpl) {
?>6666<?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class="text-center m-5">Task n° <?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
</h1>
<?php $_smarty_tpl->_subTemplateRender("file:templates/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container text-center" id="task" data-id="<?php echo $_smarty_tpl->tpl_vars['task']->value->id_task;?>
">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['task']->value->title;?>
</h5>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['task']->value->description;?>
</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    
        <div id="app">
            <div>
                <h2>Comments</h2>
                <div id="comments-list">
                    <ul class="list-group">
                        <li v-for="comment in comments" class="list-group-item">{{comment.comment}} || {{comment.value}}
                        
                        <button class="btn btn-danger p-1 m-2" v-if=''
                            v-bind:data-id='comment.comment_id'>Delete</button>
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
</div>
<?php echo '<script'; ?>
 src="js/Comments-main.js" type="module">
    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
}
}
