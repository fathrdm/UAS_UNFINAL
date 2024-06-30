<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//login
$routes->get('login', 'Login::index');
$routes->get('register', 'Register::index');
$routes->post('register/save', 'Register::save');

$routes->post('login/auth', 'Login::auth');
$routes->get('logout', 'Login::logout');
$routes->get('dashboard', 'Views::index', ['filter' => 'auth']);

$routes->group('layananft', ['filter' => 'auth'], function($routes) {
    $routes->get('dashboard', 'Views::index');
    $routes->get('response', 'Views::e_response');

    // Tanya FT routes
    $routes->get('formpengajuan', 'Views::form');
    $routes->get('tanyaft', 'Views::tanya_ft');
    $routes->get('(:segment)/tanggapan', 'Views::tanggapan/$1');
    $routes->get('(:segment)/preview', 'Views::preview/$1');
    $routes->post('datapengajuan/save', 'Views::save');
});

// $routes->group('buku', ['filter' => 'auth'], function ($routes) {
//     $routes->get('index', 'BukuRoutes::index');
//     $routes->get('(:segment)/preview', 'BukuRoutes::preview/$1');
//     $routes->get('create', 'BukuRoutes::create');
//     $routes->post('save', 'BukuRoutes::save');
//     $routes->get('edit/(:segment)', 'BukuRoutes::edit/$1');
//     $routes->post('update/(:segment)', 'BukuRoutes::update/$1');
//     $routes->get('(:segment)/delete', 'BukuRoutes::delete/$1');
// });
?>