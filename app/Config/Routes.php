<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);

$routes->get('/admin_perpus', 'Admin_perpus::index');
$routes->post('/admin_perpus/save', 'Admin_perpus::save');

$routes->get('/admin_perpus/detail/(:num)', 'Admin_perpus::detail/$1');
$routes->get('/admin_perpus/edit/(:num)', 'Admin_perpus::edit/$1');

// $routes->get('/perpustakaan', 'Perpustakaan::index');
