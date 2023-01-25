<?php
require_once('./Controller/UserController.php');

class UserModel
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
        $query = $this->db->prepare("INSERT INTO users(email,password) VALUES(?,?)");
        $query->execute(array($userEmail, $userPassword));
    }
}