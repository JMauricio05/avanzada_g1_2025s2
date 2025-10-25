<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Config/database.php';

$endpoints = require __DIR__ . '/../app/Routers/endpoints.php';
$auth = require __DIR__ . '/../app/Middleware/Auth.php';

$app = AppFactory::create();

$auth($app);

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->post('/sumar', function (Request $req, Response $res) {
    $body = $req->getBody();
    $data = json_decode($body, true);
    $suma = $data['num1'] + $data['num2'];
    // $res->getBody()->write("La sumar es $data[num1] + $data[num2] = $suma");
    // return $res;
    $dataResponse = [
        "num1" => $data['num1'],
        "num2" => $data['num2'],
        "suma" => $suma
    ];
    $res->getBody()->write(json_encode($dataResponse));
    return $res->withHeader("Content-Type", "application/json");

});

$endpoints($app);

$app->run();
