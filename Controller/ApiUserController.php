<?php
require_once('./Model/UserModel.php');
require_once('./View/ApiView.php');
require_once('./helpers/ApiAuthHelper.php');

class ApiUserController
{
    private $model;
    private $authHelper;
    private $view;

    function __construct()
    {
        $this->model = new UserModel();
        $this->authHelper = new ApiAuthHelper();
        $this->view = new ApiView();
    }
    function getToken($params = [])
    {
        try {
            $userCredentials = $this->authHelper->getBasic();
            var_dump($userCredentials);
        } catch (Exception $e) {
            echo $e;
        }
    }
}