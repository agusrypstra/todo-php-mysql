<?php
require_once('libs\smarty-4.2.1\libs\Smarty.class.php');
require_once('./Controller/LoginController.php');

class LoginView
{
    function __construct()
    {

    }

    function showLogin($message = null)
    {
        $smarty = new Smarty();
        $smarty->assign("message", $message);
        $smarty->display('../templates/user/login.tpl');
    }
    function showRegister($message = null)
    {
        $smarty = new Smarty();
        $smarty->assign("message", $message);
        $smarty->display('../templates/user/register.tpl');

    }
    function showLoginLocation()
    {
        $smarty = new Smarty();
        $smarty->display('../templates/user/login.tpl');
    }
    function showHomeLocation()
    {
        header("Location:" . BASE_URL . "home");
    }

}