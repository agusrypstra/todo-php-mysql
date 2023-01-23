<?php
class TaskModel
{
    private $db;
    function __construct()
    {
        $this->db = new PDO(
            'mysql:host=localhost;'
            . 'dbname=db_tasks;charset=utf8'
            ,
            'root',
            ''
        );
    }
    function getTasks()
    {
        $query = $this->db->prepare("SELECT * FROM tasks");
        $query->execute();
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);
        return $tasks;
    }
    function getTask($id)
    {
        $query = $this->db->prepare("SELECT * FROM tasks WHERE id_task=?");
        $query->execute(array($id));
        $task = $query->fetch(PDO::FETCH_OBJ);
        return $task;
    }
    function createTaskDB($title, $description, $priority, $finished)
    {
        $query = $this->db->prepare("INSERT INTO tasks(title, description, priority, finished) VALUES(?,?,?,?)");
        $query->execute(array($title, $description, $priority, $finished));
    }
    function deleteTaskDB($id)
    {
        $query = $this->db->prepare("DELETE FROM tasks WHERE id_task=?");
        $query->execute(array($id));
    }
    function updateTaskDB($id)
    {
        $query = $this->db->prepare("UPDATE tasks SET finished=1 WHERE id_task=?");
        $query->execute(array($id));
    }
}