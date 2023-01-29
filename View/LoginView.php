<?php
require_once('libs\smarty-4.2.1\libs\Smarty.class.php');
require_once('./Controller/LoginController.php');

class LoginView
{
    function __construct()
    {

    }

    function showLogin()
    {
        $smarty = new Smarty();
        $smarty->display('../templates/login.tpl');
    }
    function showRegister()
    {
        $smarty = new Smarty();
        $smarty->display('../templates/register.tpl');

    }
    function showLoginLocation()
    {
        header("Location:" . BASE_URL . "login");
    }
    function showHomeLocation()
    {
        header("Location:" . BASE_URL . "home");
    }

}