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
        return isset($_SESSION['username']);
    }
    function getRole()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != NULL) {
                return $_SESSION['role'];
            }
        }
    }
    function getUsername()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION['username'])) {
            if ($_SESSION['username'] != NULL) {
                return $_SESSION['username'];
            }
        }
    }
    function getUserId()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (isset($_SESSION['id'])) {
            if ($_SESSION['id'] != NULL) {
                return $_SESSION['id'];
            }
        }
    }
}