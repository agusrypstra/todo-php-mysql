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
        try {
            if ($this->authHelper->checkLoggedIn()) {
                return $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username);
            }
            return $this->view->showLogin();
        } catch (Exception $e) {
            echo $e;
        }
    }
    function showAbout()
    {
        try {
            $this->view->showAbout($this->role);
        } catch (Exception $e) {
            echo $e;
        }
    }
    function showForm()
    {
        try {
            $this->view->showForm($this->tasks, $this->categories, $this->role);
        } catch (Exception $e) {
            echo $e;
        }
    }
    function showTask($id)
    {
        try {
            $this->authHelper->checkLoggedIn();
            $task = $this->model->getTask($id);
            $this->view->showTask($task, $this->role);
        } catch (Exception $e) {
            echo $e;
        }
    }

    function addTask()
    {
        try {
            if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['priority']) || empty($_POST['category'])) {
                return $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username, "Some fields are empty");
            }
            $newTask = $this->model->createTaskDB($_POST["title"], $_POST["description"], $_POST["priority"], $_POST['category']);
            if (empty($newTask)) {
                $this->tasks = $this->model->getTasks();
                return $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username, "Something went wrong");
            }
            $this->tasks = $this->model->getTasks();
            return $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username);
        } catch (Exception $e) {
            echo $e;
        }
    }
    function deleteTask($id)
    {
        try {
            $this->model->deleteTaskDB($id);
            $this->tasks = $this->model->getTasks();
            $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username);
        } catch (Exception $e) {
            echo $e;
        }
    }
    function updateTask($taskId, $status)
    {
        try {
            $userId = $this->authHelper->getUserId();
            $this->model->updateTaskDB($userId, $taskId, $status);
            $this->tasks = $this->model->getTasks();
            $this->showHome();
        } catch (Exception $e) {
            echo $e;
        }
    }
}