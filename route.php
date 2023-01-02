<?php
require_once('tasks.php');
require_once('index.php');
showIndex();
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
if (!empty($_GET['action'])) {
    $action = $_GET['action'];

} else {

    $action = 'home';
}
$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'createTask':
        createTask();
        break;
    case 'deleteTask':
        deleteTask($params[1]);
        break;
    case 'updateTask':
        updateTask($params[1]);
        break;
    case 'about':
        showAbout();
        break;
    default:
        echo ('404 Not found');
}