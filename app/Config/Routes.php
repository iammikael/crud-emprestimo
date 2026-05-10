<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/estabelecimentos', 'EstabelecimentoController::index');
$routes->get('/patrimonios', 'PatrimonioController::index');
$routes->get('/emprestimos', 'PatrimonioController::index');