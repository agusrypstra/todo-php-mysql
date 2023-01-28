<?php
require_once('./Model/TaskModel.php');
require_once('./View/TaskView.php');
require_once('./Helpers/AuthHelper.php');
class TaskController
{
    private $model;

    private $view;
    private $authHelper;
    function __construct()
    {
        $this->authHelper = new AuthHelper();
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }
    function showHome()
    {
        $this->authHelper->checkLoggedIn();
        $tasks = $this->model->getTasks();
        $categories = $this->model->getCategories();
        $this->view->showHome($tasks, $categories);
    }
    function showTask($id)
    {
        $this->authHelper->checkLoggedIn();

        $task = $this->model->getTask($id);
        $this->view->showTask($task);
    }
    function showAbout()
    {
        $this->authHelper->checkLoggedIn();
        $this->view->showAbout();
    }
    function createTask()
    {
        if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['priority']) || empty($_POST['category'])) {
            $this->view->showHomeLocation();
            die();
        } else {
            if (!isset($_POST['finished'])) {
                $finished = 0;
            } else {
                $finished = 1;
            }
            if (!empty($_POST['newCategory'])) {
                $categories = $this->model->getCategories();
                $category = (count($categories) + 1); 
                $this->model->addCategory($_POST['newCategory']);
            } else {
                $category = $_POST['category'];
            }
            $this->model->createTaskDB($_POST["title"], $_POST["description"], $_POST["priority"], $finished, $category);
            $this->view->showHomeLocation();
        }
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