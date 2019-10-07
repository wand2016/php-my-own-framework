<?php

use Src\TemplateFactory;

$routes = [];
$template = new TemplateFactory(__DIR__ . '/../app/view/');

$routes['/'] = function () use ($template) {
    return [
        200,
        ['Content-Type' => 'text/html'],
        $template->create('index', ['name' => 'D.Horiyama'])
    ];
};

$routes['/phpinfo.php'] = function () {
    ob_start();
    phpinfo();

    return [200, ['Content-Type' => 'text/html'], ob_get_clean()];
};

return $routes;
