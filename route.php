<?php
require_once('Controller/TaskController.php');
require_once('Controller/LoginController.php');
require_once('Controller/UserController.php');
require_once('Controller/ApiCommentController.php');
require_once('Helpers/AuthHelper.php');
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
$params = explode('/', $action);

$taskController = new TaskController();
$loginController = new LoginController();
$userController = new UserController();
$authHelper = new AuthHelper();

switch ($params[0]) {
    case 'home':
        $taskController->showHome();
        break;
    case 'about':
        $taskController->showAbout();
        break;
    case 'login':
        $loginController->showLogin();
        break;
    case 'logout':
        $loginController->logout();
        break;
    case 'register':
        $loginController->showRegister();
        break;
    case 'form':
        $taskController->showForm();
        break;
    case 'verifyLogin':
        $loginController->verifyLogin();
        break;
    case 'verifyRegistration':
        $loginController->registrateUser();
        break;
    case 'createTask':
        $taskController->addTask();
        break;
    case 'deleteTask':
        $taskController->deleteTask($params[1]);
        break;
    case 'updateTask':
        $taskController->updateTask($params[1], $params[2]);
        break;
    case 'task':
        $taskController->showTask($params[1]);
        break;
    case 'users':
        $userController->showUsers();
        break;
    case 'deleteUser':
        $userController->deleteUser($params[1]);
        break;
    case 'updateRole':
        $userController->updateRole($params[1], $params[2]);
        break;

    default:
        echo ('404 Not found');
}