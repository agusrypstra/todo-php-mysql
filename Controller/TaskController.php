<?php
require_once('./Model/TaskModel.php');
require_once('./View/TaskView.php');
require_once('libs/smarty-4.2.1/libs/Smarty.class.php');
class TaskController
{
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }
    function showHome()
    {
        $tasks = $this->model->getTasks();
        $this->view->showHome($tasks);

    }
    function showTask($id)
    {
        $task = $this->model->getTask($id);
        $this->view->showTask($task);
    }
    function showAbout()
    {
        $this->view->showAbout();
    }
    function createTask()
    {
        if (!isset($_POST['finished'])) {
            $finished = 0;
        } else {
            $finished = 1;
        }
        $this->model->createTaskDB($_POST["title"], $_POST["description"], $_POST["priority"], $finished);
        $this->view->showHomeLocation();
    }
    function deleteTask($id)
    {
        $this->model->deleteTaskDB($id);
        header("Location:" . BASE_URL . "home");
    }
    function updateTask($id)
    {
        $this->model->updateTaskDB($id);
        header("Location:" . BASE_URL . "home");
    }
}