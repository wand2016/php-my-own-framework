<?php

require __DIR__ . '/../vendor/autoload.php';

$routes = require __DIR__ .'/../app/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($routes[$uri])) {
    $f = $routes[$uri]();
    $f();
} else {
    http_response_code(404);
    echo '<h1>404 not found</h1>';
}
