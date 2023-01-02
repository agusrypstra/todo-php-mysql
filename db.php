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