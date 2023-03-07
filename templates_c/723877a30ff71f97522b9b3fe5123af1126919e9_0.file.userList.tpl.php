<?php
/* Smarty version 4.2.1, created on 2023-02-14 16:11:41
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\user\userList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63eba4ad50e5a6_86418717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '723877a30ff71f97522b9b3fe5123af1126919e9' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\user\\userList.tpl',
      1 => 1676387446,
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
function content_63eba4ad50e5a6_86418717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1 class="text-center m-5"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>


<?php $_smarty_tpl->_subTemplateRender("file:templates/layout/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('username'=>$_smarty_tpl->tpl_vars['username']->value,'role'=>$_smarty_tpl->tpl_vars['role']->value), 0, false);
?>
<div class="container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        <ul class="list-group">
            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
 - <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>

                <?php if ($_smarty_tpl->tpl_vars['role']->value == 2) {?>
                    <a href='deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
' class="btn btn-outline-danger" type="button">Delete</a>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->role_id == 0) {?>
                        <a href="updateRole/<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
/1" class="btn btn-outline-primary">Set as editor</a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->role_id == 1) {?>
                        <a href="updateRole/<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
/0" class="btn btn-outline-primary">Set as viewer</a>
                    <?php }?>
                <?php }?>
            </li>
        </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:templates/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
}
}
