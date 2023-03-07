<?php
/* Smarty version 4.2.1, created on 2023-03-06 21:30:47
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\tasks\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64064d7745b2a0_81319816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36ec426a2666350826336d81df68c54fedcfb7a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\tasks\\form.tpl',
      1 => 1678134646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64064d7745b2a0_81319816 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container text-center">
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
            <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
                <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
            <?php }?>
            <button class="btn btn-primary" type="submit">Add order</button>
        </form>
    </div>
</div><?php }
}
