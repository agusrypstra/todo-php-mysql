<?php
require_once('libs\smarty-4.2.1\libs\Smarty.class.php');
require_once('./Controller/TaskController.php');
class TaskView
{
    function __construct()
    {

    }
    function showHome($tasks)
    {
        $smarty = new Smarty();
        $smarty->assign('tasks', $tasks);
        $smarty->assign('title', "To do list");
        $smarty->display('../templates/taskList.tpl');
    }
    function showAbout()
    {
        echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    <title>About</title>
                </head>
                <body>
                    <h1>About page</h1>
                </body>
                </html>
                ';
    }
    function showTask($task)
    {
        echo (
            '<div class="card">
                <h1>' . $task->title . '</h1>
                <h3>Description:</h3>
                <p>' . $task->description . '</p>
                <h3>Priority:' . $task->priority . '</h3>
                <h3>Finished:' . $task->finished . '</h3>
            </div>'
        );
    }
    function showHomeLocation()
    {
        header("Location: home");
    }
}