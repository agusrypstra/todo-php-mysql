<?php
require_once("./Model/LoginModel.php");
require_once("./View/LoginView.php");
require_once("./helpers/AuthHelper.php");

class LoginController
{
    private $model;
    private $view;
    private $authHelper;
    public $user;

    function __construct()
    {
        $this->authHelper = new AuthHelper();
        $this->model = new LoginModel();
        $this->view = new LoginView();
    }
    function showLogin()
    {
        try {
            if (!isset($_SESSION)) {
                session_start();
            }
            if (isset($_SESSION['username'])) {
                return $this->view->showHomeLocation();
            }
            return $this->view->showLogin();
        } catch (Exception $e) {
            echo $e;
        }
    }
    function verifyLogin()
    {
        try {
            if (empty($_POST['email']) || empty($_POST['password'])) {
                return $this->view->showLogin("Complete all fields");
            }
            if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
                $this->user = $this->model->getUser($_POST['email']);
                if (empty($this->user)) {
                    return $this->view->showLogin("Wrong credentials");
                }
                if (!password_verify($_POST['password'], $this->user->password)) {
                    return $this->view->showLogin("Wrong credentials");
                }
                session_start();
                $_SESSION['username'] = $_POST['email'];
                $_SESSION['role'] = $this->user->role_id;
                $_SESSION['id'] = $this->user->user_id;
                $this->view->showHomeLocation();
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
    function showRegister()
    {
        try {
            if (!isset($_SESSION)) {
                session_start();
            }
            if (isset($_SESSION['username'])) {
                return $this->view->showHomeLocation();
            }
            return $this->view->showRegister();
        } catch (Exception $e) {
            echo $e;
        }
    }

    function registrateUser()
    {
        try {
            if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['checkPassword'])) {
                return $this->view->showRegister("Some fields are empty");
            }
            $user = $this->model->getUser($_POST['email']);
            if (!empty($user)) {
                return $this->view->showRegister("Email already registred");
            }
            if ($_POST['password'] != $_POST['checkPassword']) {
                return $this->view->showRegister("Passwords do not match");
            }
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $insert = $this->model->insertUser($_POST['email'], $password);

            if ($insert === true) {
                session_start();
                $_SESSION['username'] = $_POST['email'];
                $_SESSION['role'] = 0;
                $this->view->showHomeLocation();
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
    function logout()
    {
        try {

            if (!isset($_SESSION)) {
                session_start();
            }
            session_destroy();
            return $this->view->showLogin();
        } catch (Exception $e) {
            echo $e;
        }
    }
}