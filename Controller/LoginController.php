<?php
require_once("./Model/LoginModel.php");
require_once("./View/LoginView.php");

class LoginController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new LoginModel();
        $this->view = new LoginView();
    }
    function showLogin()
    {
        $this->view->showLogin();
    }
    function verifyLogin()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $user = $this->model->getUser($_POST['email']);
            if (password_verify($_POST['password'], $user->password)) {
                session_start();
                $_SESSION['username'] = $_POST['email'];
                $this->view->showHomeLocation();
                echo 'pass ok';
            } else {
                $this->view->showLoginLocation();
                echo 'error';
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
            $this->view->showLoginLocation();
        }
    }
}