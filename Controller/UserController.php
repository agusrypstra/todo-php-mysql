<?php
require_once("./Model/UserModel.php");
require_once("./View/UserView.php");
require_once('./Helpers/AuthHelper.php');
class UserController
{
    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->authHelper = new AuthHelper();
        $this->model = new UserModel();
        $this->view = new UsersView();
    }
    function showUsers()
    {
        $role = $this->authHelper->getRole();
        var_dump($role);
        if ($role != 2) {
            return $this->view->showHomeLocation();
        }
        $users = $this->model->getUsers();
        $username = $this->authHelper->getUsername();
        $this->view->showUsers($users, $role, $username);
    }
    function deleteUser($id)
    {
        $this->model->deleteUser($id);
        $this->view->showUsersLocation();
    }
    function updateRole($user_id, $role_id)
    {
        $this->model->updateRole($user_id, $role_id);
        $this->view->showUsersLocation();
    }
}