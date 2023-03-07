<?php
require_once('libs\router.php');
require_once('Controller\ApiCommentController.php');
require_once('Controller\ApiTaskController.php');
require_once('Controller\ApiUserController.php');
// require_once('Controller\ApiTaskController.php');

$router = new Router();


$router->addRoute('tasks', 'GET', 'ApiTaskController', 'getTasks');
$router->addRoute('tasks/:ID', 'GET', 'ApiTaskController', 'getTaskById');
$router->addRoute('tasks/:ID', 'DELETE', 'ApiTaskController', 'deleteTaskById');
$router->addRoute('tasks', 'POST', 'ApiTaskController', 'addTask');

$router->addRoute('comments', 'GET', 'ApiCommentController', 'getAllComments');
$router->addRoute('comments/:ID', 'GET', 'ApiCommentController', 'getCommentsByTaskId');
$router->addRoute('comments/:ID', 'DELETE', 'ApiCommentController', 'deleteCommentById');
$router->addRoute('comments', 'POST', 'ApiCommentController', 'addComment');

$router->addRoute('user/token', 'GET', 'ApiUserController', 'getToken');

$router->route($_GET['resource'], $_SERVER["REQUEST_METHOD"]);