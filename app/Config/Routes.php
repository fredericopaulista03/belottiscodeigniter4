<?php

use App\Controllers\HomeController;
use App\Controllers\SiteController;
use App\Controllers\VagaController;
use App\Controllers\ContatoController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', [HomeController::class, 'index'],['as' => 'home']);
$routes->get('/', [SiteController::class, 'index'],['as' => 'site.home']);
$routes->get('/cadastre-se', [SiteController::class, 'cadastre'],['as' => 'site.cadastre']);
$routes->get('/contato', [SiteController::class, 'contato'],['as' => 'site.contato']);
$routes->get('/sobre', [SiteController::class, 'sobre'],['as' => 'site.sobre']);
$routes->get('/servicos', [SiteController::class, 'servicos'],['as' => 'site.servicos']);
$routes->get('/vagas-de-emprego', [SiteController::class, 'todasVagas'],['as' => 'site.vagas']);
/// Rotas públicas

$routes->get('vagas', 'VagaController::publicas');
$routes->get('vagas/(:num)', 'VagasController::show/$1');

// Rotas administrativas (prefixo admin)
$routes->group('admin', function($routes) {
    // Dashboard do admin
    $routes->get('/', 'AdminController::index');
    
    // Rotas de vagas administrativas
    $routes->group('vagas', function($routes) {
        $routes->get('/', 'VagaController::index', ['as' => 'admin.vagas.index']);
        $routes->get('new', 'VagaController::new', ['as' => 'admin.vagas.new']);
        $routes->post('cadastrar', 'VagaController::create', ['as' => 'admin.vagas.create']);
        $routes->get('editar/(:num)', 'VagaController::edit/$1', ['as' => 'admin.vagas.edit']);
        $routes->post('atualizar/(:num)', 'VagaController::update/$1', ['as' => 'admin.vagas.update']);
        $routes->get('apagar/(:num)', 'VagaController::delete/$1', ['as' => 'admin.vagas.delete']);
    });
     $routes->get('contatos', 'ContatoController::index');
    
    // Rota para visualizar os detalhes de um contato específico
    $routes->get('contatos/(:num)', 'ContatoController::show/$1');
    
    // Você pode adicionar outros grupos de rotas administrativas aqui
    // $routes->group('usuarios', function($routes) { ... });
});
service('auth')->routes($routes);