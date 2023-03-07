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
        $smarty->assign('categories', $categories);
        $smarty->assign('role', $role);
        $smarty->assign('username', $username);
        $smarty->assign('message', $message);
        $smarty->assign('title', "WORKSHOP TASKS");
        $smarty->display('../templates/layout/home.tpl');
    }
    function showHomeLayout()
    {
        $smarty = new Smarty();
        $smarty->display('../templates/tasks/taskLayoutCSR.tpl');

    }
    function showAbout()
    {
        $smarty = new Smarty();
        $smarty->display('../templates/about.tpl');
    }
    function showTask($task)
    {
        $smarty = new Smarty();
        $smarty->assign('task', $task);
        $smarty->display('../templates/tasks/task.tpl');
    }
    function showHomeLocation()
    {
        $smarty = new Smarty();
        $smarty->display("../templates/tasks/taskList.tpl");
    }
    function showLogin($message = null)
    {
        $smarty = new Smarty();
        $smarty->assign("message", $message);
        $smarty->display("../templates/user/login.tpl");
    }

}