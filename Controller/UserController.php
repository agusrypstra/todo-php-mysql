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
        try {
            $role = $this->authHelper->getRole();
            var_dump($role);
            if ($role != 2) {
                return $this->view->showHomeLocation();
            }
            $users = $this->model->getUsers();
            $username = $this->authHelper->getUsername();
            if (empty($users)) {
                return $this->view->showUsers($users, $role, $username, "There is no users");
            }
            return $this->view->showUsers($users, $role, $username);
        } catch (Exception $e) {
            echo $e;
        }
    }
    function deleteUser($id)
    {
        try {
            if (isset($id) && is_numeric($id)) {
                $this->model->deleteUser($id);
                return $this->view->showUsersLocation();
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
    function updateRole($user_id, $role_id)
    {
        try {
            if (isset($user_id) && is_numeric($user_id) && isset($role_id) && is_numeric($role_id)) {
                $this->model->updateRole($user_id, $role_id);
                return $this->view->showUsersLocation();
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
}