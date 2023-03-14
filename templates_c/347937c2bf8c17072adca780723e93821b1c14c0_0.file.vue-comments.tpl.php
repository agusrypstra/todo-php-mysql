<?php
/* Smarty version 4.2.1, created on 2023-02-07 19:38:08
  from 'E:\xampp\htdocs\web2\todolist-practice-1\templates\vue\vue-comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63e29a90d9c531_80854483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347937c2bf8c17072adca780723e93821b1c14c0' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web2\\todolist-practice-1\\templates\\vue\\vue-comments.tpl',
      1 => 1675795079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e29a90d9c531_80854483 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="app">
        <div>
            <h2>Comments</h2>
            <div id="comments-list">
                <ul class="list-group">
                    <li v-for="comment in comments" class="list-group-item">{{comment.comment}} || {{comment.value}}</li>
                </ul>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="js/app.js">
<?php }
}
