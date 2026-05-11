<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'HomeController::index');

$routes->get('/estabelecimentos', 'EstabelecimentoController::index');
$routes->get('/cadastro', 'EstabelecimentoController::create');
$routes->post('/cadastro', 'EstabelecimentoController::store');

//Rotas do patrimonio
$routes->get('/patrimonios', 'PatrimonioController::index');
$routes->get('/meus-patrimonios', 'PatrimonioController::meusPatrimonios');
$routes->get('/cadastroPatrimonio', 'PatrimonioController::create');
$routes->post('/cadastroPatrimonio', 'PatrimonioController::store');
$routes->get('/emprestimos', 'PatrimonioController::index');


$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/dashboard', function () {
    return 'Login realizado com sucesso';
});