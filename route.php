<?php
require_once('Controller/TaskController.php');
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
if (!empty($_GET['action'])) {
    $action = $_GET['action'];

} else {

    $action = 'home';
}
$params = explode('/', $action);

$taskController = new TaskController();

switch ($params[0]) {
    case 'home':
        $taskController->showHome();
        break;
    case 'createTask':
        $taskController->createTask();
        break;
    case 'deleteTask':
        $taskController->deleteTask($params[1]);
        break;
    case 'updateTask':
        $taskController->updateTask($params[1]);
        break;
    case 'task':
        $taskController->showTask($params[1]);
    case 'about':
        $taskController->showAbout();
        break;
    default:
        echo ('404 Not found');
}