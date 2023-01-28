<?php
class AuthHelper
{
    function __construct()
    {
    }
    function checkLoggedIn()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['username'])) {
            header("Location:" . BASE_URL . "login");
        }
    }
    function logout()
    {
        session_start();
        session_destroy();
        header("Location:" . BASE_URL . "login");
    }
}