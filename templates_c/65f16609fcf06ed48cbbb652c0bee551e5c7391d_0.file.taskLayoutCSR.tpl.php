<?php
/* Smarty version 4.2.1, created on 2023-02-02 16:30:51
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\taskLayoutCSR.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63dbd72bd0c675_02969025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65f16609fcf06ed48cbbb652c0bee551e5c7391d' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\taskLayoutCSR.tpl',
      1 => 1675351807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/navbar.tpl' => 1,
    'file:templates/vue/taskList.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63dbd72bd0c675_02969025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center m-5">
    Home
</h1>

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
                                    </select>
            </div>
            <div class="form-group">
                <label for="newCategory">New category</label>
                <input id="newCategory" class="form-control" type="text" name="newCategory">
            </div>
            <button class="btn btn-primary" type="submit">Add order</button>
        </form>
    </div>
</div>
<div class="row">
    <h2>Pending</h2>
    <div class="col">
        <?php $_smarty_tpl->_subTemplateRender("file:templates/vue/taskList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php echo '<script'; ?>
 src="js/app.js">
    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
}
}
