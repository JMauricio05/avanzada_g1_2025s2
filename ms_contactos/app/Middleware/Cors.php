<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Psr7\Response;

return function ($app) {
    $allowedOrigins = ['*'];

    $app->add(function (Request $request, $handler) use ($allowedOrigins) {
        $origin = $request->getHeaderLine('Origin');
        $allowOrigin = in_array($origin, $allowedOrigins) ? $origin : 'null';

        $response = $handler->handle($request);
        return $response
            ->withHeader('Access-Control-Allow-Origin', $allowOrigin)
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS');
    });

    $app->options('/{routes:.+}', function (Request $request, Response $response) {
        return $response;
    });
};