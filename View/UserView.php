<?php
require_once('libs\smarty-4.2.1\libs\Smarty.class.php');
require_once('./Controller/UserController.php');
class UsersView
{
    function __construct()
    {

    }
    function showUsers($users, $role, $username, $message = null)
    {
        $smarty = new Smarty();
        $smarty->assign('users', $users);
        $smarty->assign('role', $role);
        $smarty->assign('username', $username);
        $smarty->assign('message', $message);
        $smarty->assign('title', "Users");
        $smarty->display('../templates/user/userList.tpl');
    }
    function showUsersLocation()
    {
        header("Location:" . BASE_URL . "users");
    }
    function showHomeLocation()
    {
        header("Location:" . BASE_URL . "home");
    }
}