<?php
namespace App\Controllers;

require __DIR__ . "/../models/usuario.php";
require __DIR__ . "/session-controller.php";

use App\Models\Usuario;

class UsuariosController
{

    public function login($request)
    {
        if (empty($request['user']) || empty($request['pwd'])) {
            return null;
        }
        $usuario = new Usuario();
        $usuario->set('username', $request['user']);
        $usuario->set('password', $request['pwd']);
        $auth = $usuario->find();
        $session = new SessionController();
        $session->createSession($auth);
        return $auth;
    }

    public function logout($url)
    {
        $session = new SessionController();
        $session->deleteSession($url);
    }
}