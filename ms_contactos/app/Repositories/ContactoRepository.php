<?php

namespace App\Repositories;

use App\Controllers\ContactosController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ContactoRepository
{
    public function list(Request $request, Response $response)
    {
        $controller = new ContactosController();
        $data = $controller->index();
        $response->getBody()->write($data);
        return $response->withHeader("Content-Type", "application/json");
    }

    
}