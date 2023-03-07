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
    function createTaskDB($title, $description, $priority, $category)
    {
        try {
            $query = $this->db->prepare("INSERT INTO tasks(title, description, priority, id_category,status_id) VALUES(?,?,?,?,?)");
            $query->execute(array($title, $description, $priority, $category, 0));
            return $this->db->lastInsertId();
        } catch (Exception $e) {
            echo $e;
        }
    }
    function deleteTaskDB($id)
    {
        try {
            $queryComment = $this->db->prepare("DELETE FROM comments WHERE task_id=?");
            $queryComment->execute(array($id));

            $queryTask = $this->db->prepare("DELETE FROM tasks WHERE id_task=?");
            $queryTask->execute(array($id));
        } catch (\Exception $e) {
            var_dump($e);
        }
    }
    function updateTaskDB($userId, $taskId, $status)
    {
        $query = $this->db->prepare("UPDATE tasks SET status_id=?, id_user=? WHERE id_task=?");
        $query->execute(array($status, $userId, $taskId));
    }
}