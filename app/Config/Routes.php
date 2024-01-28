<?php namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;
use Config\Services;

$routes = Services::routes(true);

if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->get('/admin', 'LoginController::index');
$routes->post('/', 'LoginController::doAdminLogin');

$routes->group('/admin', ['filter' => 'auth'], function ($routes) {
    // Las rutas dentro de este grupo ya tienen el prefijo /admin
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->post('dashboard', 'AdminController::dashboard');
});
//