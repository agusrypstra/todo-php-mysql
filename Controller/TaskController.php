<?php
require_once('./Model/TaskModel.php');
require_once('./View/TaskView.php');
require_once('./Helpers/AuthHelper.php');
class TaskController
{
    private $model;

    private $view;
    private $authHelper;
    public $tasks;
    public $categories;
    public $role;
    public $username;
    function __construct()
    {
        $this->authHelper = new AuthHelper();
        $this->model = new TaskModel();
        $this->view = new TaskView();

        $this->tasks = $this->model->getTasks();
        $this->categories = $this->model->getCategories();

        $this->role = $this->authHelper->getRole();
        $this->username = $this->authHelper->getUsername();
    }
    function showHome()
    {
        if ($this->authHelper->checkLoggedIn()) {
            return $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username);
        }
        return $this->view->showLogin();
    }
    function showAbout()
    {
        $this->view->showAbout();
    }
    function showTask($id)
    {
        $this->authHelper->checkLoggedIn();
        $task = $this->model->getTask($id);
        $this->view->showTask($task);
    }

    function addTask()
    {
        if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['priority']) || empty($_POST['category'])) {
            return $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username, "Some fields are empty");
        }
        $this->model->createTaskDB($_POST["title"], $_POST["description"], $_POST["priority"], $_POST['category']);
        $this->tasks = $this->model->getTasks();
        $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username);
    }
    function deleteTask($id)
    {
        $this->model->deleteTaskDB($id);
        $this->tasks = $this->model->getTasks();
        $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username);
    }
    function updateTask($taskId, $status)
    {
        $userId = $this->authHelper->getUserId();
        $this->model->updateTaskDB($userId, $taskId, $status);
        $this->tasks = $this->model->getTasks();
        $this->showHome();
    }
}