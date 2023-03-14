<?php
require_once('libs\smarty-4.2.1\libs\Smarty.class.php');
require_once('./Controller/TaskController.php');
class TaskView
{
    function __construct()
    {

    }
    function showHome($tasks, $categories, $role, $username, $message = null)
    {
        $smarty = new Smarty();
        $smarty->assign('tasks', $tasks);
        $smarty->assign('role', $role);
        $smarty->assign('username', $username);
        $smarty->assign('categories', $categories);
        $smarty->assign('message', $message);
        $smarty->assign('title', "Work devices");
        $smarty->display('../templates/layout/home.tpl');
    }
    function showAbout($username = null, $role = null)
    {
        $smarty = new Smarty();
        $smarty->assign('role', $role);
        $smarty->assign('username', $username);
        $smarty->display('templates\about.tpl');
    }
    function showForm($categories, $role, $username, $message = null)
    {
        $smarty = new Smarty();
        $smarty->assign('title', "Add task");
        $smarty->assign('categories', $categories);
        $smarty->assign('role', $role);
        $smarty->assign('username', $username);
        $smarty->assign('message', $message);
        $smarty->display('../templates/tasks/form.tpl');
    }
    function showTask($task, $role, $username)
    {
        $smarty = new Smarty();
        $smarty->assign('task', $task);
        $smarty->assign('role', $role);
        $smarty->assign('username', $username);

        $smarty->display('../templates/tasks/task.tpl');
    }
    function showHomeLocation()
    {
        header("Location:" . BASE_URL . "home");
    }
    function showLogin($message = null)
    {
        $smarty = new Smarty();
        $smarty->assign("message", $message);
        $smarty->display("../templates/user/login.tpl");
    }

}