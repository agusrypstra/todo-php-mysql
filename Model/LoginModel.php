<?php
require_once('./Controller/LoginController.php');

class LoginModel
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
    function getUser($userEmail)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $query->execute(array($userEmail));
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
    function insertUser($userEmail, $userPassword)
    {
        try {
            $validateQuery = $this->db->prepare("SELECT * FROM users WHERE email=?");
            $validateQuery->execute(array($userEmail));
            $validate = $validateQuery->fetch(PDO::FETCH_OBJ);
            if (empty($validate)) {
                $role = 0;
                $query = $this->db->prepare("INSERT INTO users(email,password,role_id) VALUES(?,?,?)");
                $query->execute(array($userEmail, $userPassword, $role));
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
}