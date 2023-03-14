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
    function showHome($params = null)
    {
        try {
            if (isset($_GET['type']) && !empty($_GET['type'])) {
                $this->tasks = $this->model->getTasksByType($_GET['type']);
                return $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username);
            } else {
                return $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    function showAbout()
    {
        try {
            $this->view->showAbout($this->username, $this->role);
        } catch (Exception $e) {
            echo $e;
        }
    }
    function showForm()
    {
        try {
            $this->view->showForm($this->categories, $this->role, $this->username);
        } catch (Exception $e) {
            echo $e;
        }
    }
    function showTask($id)
    {
        try {
            $task = $this->model->getTask($id);
            if (empty($task)) {
                return $this->view->showHome($this->tasks, $this->categories, $this->role, $this->username, "Task doesn't exists.");
            }
            return $this->view->showTask($task, $this->role, $this->username);
        } catch (Exception $e) {
            echo $e;
        }
    }

    function addTask()
    {
        try {
            if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['priority']) || empty($_POST['category'])) {
                return $this->view->showForm($this->categories, $this->role, $this->username, "Some fields are empty");
            }
            if ($_POST['priority'] > 5 || $_POST['priority'] < 1) {
                return $this->view->showForm($this->categories, $this->role, $this->username, "Priority only from 1 to 5");
            }
            $newTask = $this->model->createTaskDB($_POST["title"], $_POST["description"], $_POST["priority"], $_POST['category']);
            if (empty($newTask)) {
                $this->tasks = $this->model->getTasks();
                return $this->view->showForm($this->categories, $this->role, $this->username, "Something went wrong");
            }
            $this->tasks = $this->model->getTasks();
            return $this->view->showHomeLocation();
        } catch (Exception $e) {
            echo $e;
        }
    }
    function deleteTask($id)
    {
        try {
            $this->model->deleteTaskDB($id);
            $this->tasks = $this->model->getTasks();
            $this->view->showHomeLocation();
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
            $this->view->showHomeLocation();
        } catch (Exception $e) {
            echo $e;
        }
    }
}