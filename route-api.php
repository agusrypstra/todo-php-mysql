<?php
require_once('libs\router.php');
require_once('Controller\ApiTaskController.php');

$router = new Router();

$router->addRoute('tasks', 'GET', 'ApiTaskController', 'getTasks');
$router->addRoute('tasks/:ID', 'GET', 'ApiTaskController', 'getTaskById');

$router->route($_GET['resource'], $_SERVER["REQUEST_METHOD"]);