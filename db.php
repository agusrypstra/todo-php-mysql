<?php
require_once('db.php');
function getTasks()
{
    $db = new PDO(
        'mysql:host=localhost;'
        . 'dbname=db_tasks;charset=utf8'
        ,
        'root',
        ''
    );
    $query = $db->prepare("SELECT * FROM tasks");
    $query->execute();
    $tasks = $query->fetchAll(PDO::FETCH_OBJ);

    return $tasks;
}
function createTaskDB($title, $description, $priority, $finished)
{
    $db = new PDO(
        'mysql:host=localhost;'
        . 'dbname=db_tasks;charset=utf8'
        ,
        'root',
        ''
    );
    $query = $db->prepare("INSERT INTO tasks(title, description, priority, finished) VALUES(?,?,?,?)");
    $query->execute(array($title, $description, $priority, $finished));
}

function deleteTaskDB($id)
{
    $db = new PDO(
        'mysql:host=localhost;'
        . 'dbname=db_tasks;charset=utf8'
        ,
        'root',
        ''
    );
    $query = $db->prepare("DELETE FROM tasks WHERE id_task=?");
    $query->execute(array($id));
}
function updateTaskDB($id)
{
    $db = new PDO(
        'mysql:host=localhost;'
        . 'dbname=db_tasks;charset=utf8'
        ,
        'root',
        ''
    );
    $query = $db->prepare("UPDATE tasks SET finished=1 WHERE id_task=?");
    $query->execute(array($id));
}