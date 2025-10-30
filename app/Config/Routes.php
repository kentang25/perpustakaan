<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);

$routes->get('/admin_perpus', 'Admin_perpus::index');
$routes->get('/admin_perpus/detail', 'Admin_perpus::detail');
$routes->post('/admin_perpus/save', 'Admin_perpus::save');

$routes->get('/admin_perpus/detail/(:num)', 'Admin_perpus::detail/$1');
$routes->get('/admin_perpus/edit/(:num)', 'Admin_perpus::edit/$1');
$routes->post('/admin_perpus/update/(:num)', 'Admin_perpus::update/$1');
$routes->get('/admin_perpus/delete/(:num)', 'Admin_perpus::delete/$1');

$routes->get('/dungeons', 'Perpustakaan::index');
$routes->get('/dungeons/detail-book/(:any)', 'Perpustakaan::detail/$1');

// --- category ---
$routes->get('/dungeons/category/', 'Perpustakaan::list_book');
$routes->get('/dungeons/category/(:segment)', 'Perpustakaan::list_kategori/$1');
// --- end category ---

$routes->get('dungeons/about/', 'Perpustakaan::about');
$routes->get('dungeons/cari/', 'Perpustakaan::cari');




