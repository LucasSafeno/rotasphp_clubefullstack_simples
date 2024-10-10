<?php

// Autoload
require '../vendor/autoload.php';

// Routes
require '../routers/router.php';

try {
    // Pegar Path da URI
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    // Pegar o tipo de requisição
    $request = $_SERVER['REQUEST_METHOD'];

    // Verificar se o tipo de requisição existe no route
    if (!isset($router[$request])) {
        throw new Exception('A Rota não existe');
    }
    // Verifica se a URI existe no array $router
    if (!array_key_exists($uri, $router[$request])) {
        throw new Exception('A Rota não existe');
    }

    $controller = $router[$request][$uri];

    $controller();
} catch (Exception  $e) {
    $e->getMessage();
}
