<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin_perpus::index');
$routes->post('/admin_perpus/save', 'Admin_perpus::save');

// $routes->get('/perpustakaan', 'Perpustakaan::index');
