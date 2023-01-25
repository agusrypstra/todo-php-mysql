<?php
require_once("./Model/UserModel.php");
require_once("./View/UserView.php");

class UserController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new UserModel();
        $this->view = new UserView();
    }
    function showLogin()
    {
        $this->view->showLogin();
    }
    function verifyLogin()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $user = $this->model->getUser($_POST['email']);
            if ($user->password == $_POST['password']) {
                echo 'Login succesfull';
            } else {
                echo 'Login failed';
            }
        }
    }
    function showRegister()
    {
        $this->view->showRegister();
    }
    function verifyRegistration()
    {
        if (isset($_POST['email']) && isset($_POST['password']) && $_POST['password'] == $_POST['checkPassword']) {
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $this->model->insertUser($email, $password);
        }
    }
}