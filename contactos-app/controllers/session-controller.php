<?php
namespace App\Controllers;

class SessionController
{

    public function __construct()
    {
        session_start();
    }

    public function createSession($usuario)
    {
        if (empty($usuario)) {
            return false;
        }
        $_SESSION["id"] = $usuario->get('id');
        $_SESSION["user"] = $usuario->get('username');
        return true;
    }

    public function getSession()
    {
        return [
            'id' => $_SESSION['id'],
            'user' => $_SESSION['user'],
        ];
    }

    public function validateSession($url)
    {
        if (empty($_SESSION['id'])) {
            header("Location: $url");
        }
    }

    public function deleteSession($url){
        session_unset();
        session_destroy();
        header("Location: $url");
    }

}