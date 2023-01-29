<?php
require_once('./Model/TaskModel.php');
require_once('./View/ApiView.php');

class ApiTaskController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new TaskModel();
        $this->view = new ApiView();
    }
    function getTasks()
    {
        $tasks = $this->model->getTasks();
        return $this->view->response($tasks, 200);
    }
    function getTaskById($params = [])
    {
        $id = $params[':ID'];
        $task = $this->model->getTask($id);
        return $this->view->response($task, 200);
    }
}