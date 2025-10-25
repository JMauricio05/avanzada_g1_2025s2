<?php

use App\Controllers\ContactosController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    $app->group('/contactos', function (RouteCollectorProxy $group) {
        $group->get('/', function (Request $request, Response $response) {
            $controller = new ContactosController();
            $data = $controller->index();
            $response->getBody()->write($data);
            return $response->withHeader("Content-Type", "application/json");
        });

        $group->get('/{id}', function (Request $request, Response $response, $args) {
            try {
                $controller = new ContactosController();
                $data = $controller->detail($args['id']);
                $response->getBody()->write($data);
                return $response->withHeader("Content-Type", "application/json");
            } catch (Exception $ex) {
                $statusError = [1 => 409, 2 => 404];
                $status = $statusError[$ex->getCode()] ?? 400;
                // $status = 400
                // if ($ex->getCode() == 1) {
                //     $status = 409;
                // } else if ($ex->getCode() == 2) {
                //     $status = 404;
                // }
                $response->getBody()->write(json_encode(['msg' => 'Error']));
                return $response
                    ->withHeader("Content-Type", "application/json")
                    ->withStatus($status);
            }
        });

        $group->post('/', function(Request $request, Response $response){
            try {
                $body = $request->getBody()->getContents();
                $bodyRequest = json_decode($body, true);
                $controller = new ContactosController();
                $data = $controller->create($bodyRequest);
                $response->getBody()->write($data);
                return $response->withHeader("Content-Type", "application/json");
            } catch (Exception $ex) {
                $statusError = [1 => 409];
                $status = $statusError[$ex->getCode()] ?? 400;
                $response->getBody()->write(json_encode(['msg' => 'Error']));
                return $response
                    ->withHeader("Content-Type", "application/json")
                    ->withStatus($status);
            }
        });
    });

    // $app->get('/contactos', function (Request $request, Response $response) {
    //     $controller = new ContactosController();
    //     $data = $controller->index();
    //     $response->getBody()->write($data);
    //     return $response->withHeader("Content-Type", "application/json");
    // });
};