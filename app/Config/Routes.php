<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
$routes->get('home', 'HomeController::index');

//Rotas dos emprestimos 
$routes->get('emprestimos/solicitarEmprestimo/(:num)', 'EmprestimoController::create/$1');
$routes->get('/emprestimos', 'EmprestimoController::index');
$routes->post('emprestimos/store', 'EmprestimoController::store');


//Rotas do estabelecimento
$routes->get('/estabelecimentos', 'EstabelecimentoController::index');
$routes->get('/cadastro', 'EstabelecimentoController::create');
$routes->post('/cadastro', 'EstabelecimentoController::store');

//Rotas do patrimonio
$routes->get('/patrimonios', 'PatrimonioController::index');
$routes->get('/meus-patrimonios', 'PatrimonioController::meusPatrimonios');
$routes->get('/cadastroPatrimonio', 'PatrimonioController::create');
$routes->post('/cadastroPatrimonio', 'PatrimonioController::store');


//Rotas de login e logout
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/dashboard', function () {
    return 'Login realizado com sucesso';
});