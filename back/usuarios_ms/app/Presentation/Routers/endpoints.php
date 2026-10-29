<?php

// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;
use App\Presentation\Repositories\UserRepository;
use Slim\App;

return function (App $app) {
    // $app->get('/usuarios', function (Request $request, Response $response, $args) {
    //     $repository = new UserRepository();
    //     return $repository->all($request, $response, $args);
    // });
    
    $app->post('/login', [UserRepository::class, 'login']);
    $app->get('/usuarios', [UserRepository::class, 'all']);
    $app->post('/usuarios', [UserRepository::class, 'create']);
    $app->put('/usuarios/{id}', [UserRepository::class, 'update']);
    $app->delete('/usuarios/{id}', [UserRepository::class, 'delete']);
};
