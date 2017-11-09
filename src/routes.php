<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes


$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/loginDemo/{}', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
 return $response->write("login page");
});


$app->post('/login', function (Request $request, Response $response) {
       
    
    return $response->getBody()->write($request->getParsedBody()['user']);
});