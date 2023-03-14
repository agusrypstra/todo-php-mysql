<?php
/* Smarty version 4.2.1, created on 2023-03-14 15:40:35
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\layout\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64108763936817_21477184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4db26d5cb7dde234beb20c15b7192e2c2320337' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\layout\\navbar.tpl',
      1 => 1678804835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64108763936817_21477184 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar">
  <a class="navbar-toggler toggler-example" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
    aria-controls="offcanvasExample">
    <span class="navbar-toggler-icon">
  </a>

  <div class="offcanvas offcanvas-start d-flex" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between p-0">
      <div>
        <div class="d-flex justify-content-center">
          <div class="card border-0 d-flex justify-content-center align-items-center" style="width: 18rem;">
            <img src="img\blank-profile-picture-973460__340.png" class="rounded-circle" style="width: 66%" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 -
                <?php if ($_smarty_tpl->tpl_vars['role']->value) {?>
                  <span><?php echo $_smarty_tpl->tpl_vars['role']->value[1];?>
</span>
                <?php } else { ?>
                  viewer
                <?php }?>
              </h5>
            </div>
          </div>
        </div>
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item m-2"><a class="nav-link" href="home">Home</a></li>
            <?php if ($_smarty_tpl->tpl_vars['role']->value) {?>
              <?php if ($_smarty_tpl->tpl_vars['role']->value[0] == 2 || $_smarty_tpl->tpl_vars['role']->value == 1) {?>
                <li class="list-group-item m-2"><a class="nav-link" href="form">Add task</a></li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['role']->value[0] == 2) {?>
                <li class="list-group-item m-2"><a class="nav-link" href="users">Users</a></li>
              <?php }?>
            <?php }?>
            <li class="list-group-item m-2"><a class="nav-link" href="about">About</a></li>
          </ul>
        </div>
      </div>
      <div class="d-flex justify-content-end p-2">
        <form class="d-flex" action="logout" method="post">
          <button class="btn btn-outline-danger" type="submit">Logout</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<?php }
}
