<?php
require_once("Controller/ApiCommentController.php");

class CommentModel
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
    function getAllComments()
    {
        $query = $this->db->prepare("SELECT * FROM comments");
        $query->execute();
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }
    function getCommentsById($id)
    {
        try {
            $query = $this->db->prepare("SELECT * FROM comments WHERE task_id = ?");
            $query->execute(array($id));
            $comments = $query->fetchAll((PDO::FETCH_OBJ));
            return $comments;
        } catch (Exception $e) {
            return $e;
        }
    }
    function addComment($comment, $value, $task_id, $user_id)
    {
        try {
            date_default_timezone_set("America/Argentina/Buenos_Aires");
            $date = date('y-m-d h:i:s a');
            $query = $this->db->prepare("INSERT INTO comments (comment,value,date,task_id,user_id) VALUES (?,?,?,?,?)");
            $query->execute(array($comment, $value, $date, $task_id, $user_id));
            return $this->db->lastInsertId();
        } catch (Exception $e) {
            echo $e;
        }
    }
    function deleteCommentById($id)
    {
        try {
            $query = $this->db->prepare("DELETE FROM comments WHERE comment_id = ?");
            $query->execute(array($id));
        } catch (Exception $e) {
            $e;
        }
    }
    function getOrderComents($id, $order)
    {
        try {
            if ($order == "oldest") {
                $query = $this->db->prepare("SELECT * FROM `comments` WHERE task_id=? ORDER BY `comments`.`date` ASC ");
                $query->execute(array($id));
                $comments = $query->fetchAll(PDO::FETCH_OBJ);
                return $comments;
            }
            if ($order == "newest") {
                $query = $this->db->prepare("SELECT * FROM `comments` WHERE task_id=? ORDER BY `comments`.`date` DESC ");
                $query->execute(array($id));
                $comments = $query->fetchAll(PDO::FETCH_OBJ);
                return $comments;
            }
            if ($order == "less-valued") {
                $query = $this->db->prepare("SELECT * FROM `comments` WHERE task_id=? ORDER BY `comments`.`value` ASC ");
                $query->execute(array($id));
                $comments = $query->fetchAll(PDO::FETCH_OBJ);
                return $comments;
            }
            if ($order == "most-valued") {
                $query = $this->db->prepare("SELECT * FROM `comments` WHERE task_id=? ORDER BY `comments`.`value` DESC ");
                $query->execute(array($id));
                $comments = $query->fetchAll(PDO::FETCH_OBJ);
                return $comments;
            }

        } catch (Exception $e) {
            $e;
        }
    }
}