<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use Classes\Controllers\TicketsController;

return function (App $app) {

    $app->get('/tickets', TicketsController::class . ':index');

    $app->get('/tickets/create', TicketsController::class . ':create');

    $app->post('/tickets', TicketsController::class . ':store');

    $app->get('/tickets/{id}', TicketsController::class . ':show');

    $app->get('/tickets/{id}/edit', TicketsController::class . ':edit');

    $app->patch('/tickets/{id}', TicketsController::class . ':update');

    $app->delete('/tickets/{id}', TicketsController::class . ':delete');

    $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });


};
