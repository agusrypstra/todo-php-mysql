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
        if ($tasks) {
            return $this->view->response($tasks, 200);
        } else {
            return $this->view->response("Tasks does not exists", 404);
        }
    }
    function getTaskById($params = [])
    {
        $id = $params[':ID'];
        $task = $this->model->getTask($id);
        if ($task) {
            return $this->view->response($task, 200);
        } else {
            return $this->view->response('Task does not exist', 404);
        }
    }
    function deleteTaskById($params = [])
    {
        $id = $params[":ID"];
        $task = $this->model->getTask($id);
        if ($task) {
            $this->model->deleteTaskDB($id);
            return $this->view->response('Task deleted', 200);
        } else {
            return $this->view->response('Task does not exist', 404);
        }
    }
    function addTask()
    {
        $body = $this->getBody();
        $id = $this->model->createTaskDB($body->title, $body->description, $body->priority, $body->id_category);
        $this->view->response("Task added successfully with id no: $id", 200);
    }
    private function getBody()
    {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }
}