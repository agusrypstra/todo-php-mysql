<?php
/* Smarty version 4.2.1, created on 2023-02-09 19:45:25
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\editUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e53f45440958_63760778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b27108b0910b60170d075cd65fa425342a7e8a6f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\editUser.tpl',
      1 => 1675968320,
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
function content_63e53f45440958_63760778 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="text-center m-5"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container text-center">
    <form method="post" action="/updateRole/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
" class="m-2">
        <div class="form-group">
            <label for="email">Email</label>
            <h2><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</h2>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select id="role" class="form-control" name="role">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['role']->value->role_id == $_smarty_tpl->tpl_vars['user']->value->role_id) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->role_id;?>
" selected><?php echo $_smarty_tpl->tpl_vars['role']->value->name;?>
</option>
                    <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->role_id;?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value->name;?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
