<?php
class TaskModel
{
    private $db;
    public $tasks;
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
        $query = $this->db->prepare("SELECT t.*,c.name,u.email FROM tasks t LEFT JOIN categories c ON t.id_category = c.id_category LEFT JOIN users u ON t.id_user = u.user_id");
        $query->execute();
        $this->tasks = $query->fetchAll(PDO::FETCH_OBJ);
        return $this->tasks;
    }
    function getTasksByType($type)
    {
        $query = $this->db->prepare("SELECT t.*,c.name,u.email FROM tasks t LEFT JOIN categories c ON t.id_category = c.id_category LEFT JOIN users u ON t.id_user = u.user_id WHERE t.id_category=?");
        $query->execute(array($type));
        $this->tasks = $query->fetchAll(PDO::FETCH_OBJ);
        return $this->tasks;
    }
    function getCategories()
    {
        $query = $this->db->prepare("SELECT * FROM categories");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }
    function getTask($id)
    {
        $query = $this->db->prepare("SELECT * FROM tasks AS t,categories AS c WHERE t.id_category = c.id_category;");
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