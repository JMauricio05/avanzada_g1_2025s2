<?php
namespace App\repositories;

use App\controllers\ContactosController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ContactosRepository
{

    function queryAllContactos(Request $request, Response $response)
    {

        $controller = new ContactosController();
        $data = $controller->getContactos();
        if (empty($data)) {
            $response->withStatus(204);
            return $response;
        }
        $response
            ->withHeader("Content-Type", "application/json")
            ->getBody()
            ->write($data);
        return $response;
    }

}