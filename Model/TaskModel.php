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
        $query = $this->db->prepare("SELECT * FROM tasks JOIN categories ON tasks.id_category = categories.id_category");
        $query->execute();
        $tasks = $query->fetchAll(PDO::FETCH_OBJ);
        return $tasks;
    }
    function getCategories()
    {
        $query = $this->db->prepare("SELECT * FROM categories");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }
    function addCategory($category)
    {
        $query = $this->db->prepare("INSERT INTO categories(id_category,name) VALUES (?,?)");
        $query->execute(array('', $category));
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }
    function getTask($id)
    {
        $query = $this->db->prepare("SELECT * FROM tasks JOIN categories ON tasks.id_category = categories.id_category WHERE id_task=?");
        $query->execute(array($id));
        $task = $query->fetch(PDO::FETCH_OBJ);
        return $task;
    }
    function createTaskDB($title, $description, $priority, $finished, $category)
    {
        $query = $this->db->prepare("INSERT INTO tasks(title, description, priority, finished, id_category) VALUES(?,?,?,?,?)");
        $query->execute(array($title, $description, $priority, $finished, $category));
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