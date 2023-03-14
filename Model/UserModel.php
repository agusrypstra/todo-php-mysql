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
    function getUsers()
    {
        $query = $this->db->prepare("SELECT * FROM users as u,roles as r WHERE u.role_id = r.role_id AND u.role_id != 2");
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }
    function getRoles()
    {
        $query = $this->db->prepare("SELECT * FROM roles");
        $query->execute();
        $roles = $query->fetchAll(PDO::FETCH_OBJ);
        return $roles;
    }
    function getUser($id)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE user_id=?");
        $query->execute(array($id));
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
    function deleteUser($id)
    {
        $query = $this->db->prepare("DELETE FROM users WHERE user_id = ?");
        $query->execute(array($id));
    }
    function updateRole($id, $role)
    {
        $query = $this->db->prepare("UPDATE users SET role_id=? WHERE user_id = ?");
        $query->execute(array($role, $id));
    }
}