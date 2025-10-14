<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('/', function ($routes) {
    $routes->presenter("ventas", ['controller' => 'Ventas', 'only' => ['index', 'show', 'new', 'create', 'edit', 'update', 'delete']]); //esto crea las rutas para un CRUD cuando se usa la aplicacion con un navegador
    $routes->presenter('clientes', ['controller' => 'Clientes', 'only' => ['index', 'create', 'edit', 'update', 'delete']]);
    $routes->presenter("inventario", ['controller' => 'Inventario', 'only' => ['index', 'new', 'create', 'edit', 'update', 'delete']]);
    $routes->presenter('compras', ['controller' => 'Compras', 'only' => ['index', 'new', 'create', 'edit', 'update', 'delete']]);
});