<?php

class ApiAuthHelper
{

    function __construct()
    {

    }
    function getBasic()
    {
        $header = $this->getHeader();
        if (strpos($header, "Basic ") === 0) {
            $userPass = explode(" ", $header)[1];
            $userPass = base64_decode($userPass);
            $userPass = explode(":", $userPass);
            if (count($userPass) == 2) {
                $user = $userPass[0];
                $pass = $userPass[1];
                return array(
                    "user" => $user,
                    "pass" => $pass
                );
            }
        } else {
            return null;
        }
    }
    function getHeader()
    {
        if (isset($_SERVER["REDIRECT_HTTP_AUTHORIZATION"])) {
            return $_SERVER["REDIRECT_HTTP_AUTHORIZATION"];
        }
        if (isset($_SERVER["HTTP_AUTHORIZATION"])) {
            return $_SERVER["HTTP_AUTHORIZATION"];
        }
    }
    function createToken($user)
    {

    }
}