<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers\Frontend');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->post('/', 'HomeController::search');

$routes->group('admin', ['namespace' => 'App\Controllers\Backend'], function ($routes) {
	$routes->get('/', 'DashboardController::index', ['filter' => 'role:admin,penjual']);

	$routes->get('categories', 'CategoriesController::index', ['filter' => 'role:admin']);
	$routes->post('categories', 'CategoriesController::addCategory', ['filter' => 'role:admin']);
	$routes->put('categories/(:num)', 'CategoriesController::updateCategory/$1', ['filter' => 'role:admin']);
	$routes->delete('categories/(:num)', 'CategoriesController::deleteCategory/$1', ['filter' => 'role:admin']);

	$routes->get('users', 'ProfileController::index', ['filter' => 'role:admin,penjual']);
	$routes->delete('users/(:num)/(:num)', 'ProfileController::deleteuser/$1/$2', ['filter' => 'role:admin,penjual']);
	$routes->put('users/(:num)/(:num)', 'ProfileController::verifikasi/$1/$2', ['filter' => 'role:admin,penjual']);
});

$routes->group('produk', ['namespace' => 'App\Controllers\Backend'], function ($routes) {
	$routes->get('/', 'ProductController::index', ['filter' => 'role:pembeli,penjual,admin']);
	$routes->get('(:num)', 'ProdukController::detail/$1', ['filter' => 'role:pembeli,penjual,admin']);
	$routes->post('add', 'ProdukController::add', ['filter' => 'role:pembeli,penjual,admin']);
});

$routes->group('product', ['namespace' => 'App\Controllers\Frontend'], function ($routes) {
	$routes->get('/', 'ProductController::index', ['filter' => 'role:pembeli,penjual,admin']);
	$routes->get('(:any)', 'ProductController::detail/$1', ['filter' => 'role:pembeli,penjual,admin']);
	$routes->post('add', 'ProductController::add', ['filter' => 'role:pembeli,penjual,admin']);
});

$routes->group('category', ['namespace' => 'App\Controllers\Frontend'], function ($routes) {
	$routes->get('/', 'CategoriesController::index');
	$routes->get('(:any)', 'CategoriesController::category/$1');
});

$routes->group('profile', ['namespace' => 'App\Controllers\Frontend'], function ($routes) {
	$routes->get('/', 'ProfileController::index', ['filter' => 'role:pembeli,penjual']);
	$routes->post('/', 'ProfileController::upgrade', ['filter' => 'role:pembeli,penjual']);
	$routes->get('(:any)', 'ProfileController::profile/$1', ['filter' => 'role:pembeli,penjual']);
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
