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
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Siswa');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get ac performance increase by specifying the default
// route since we don't have to scan directories.
$routes->group('admin', function ($routes) {
	$routes->add('/', 'Home::index');
	$routes->add('siswa', 'Siswa::index');
	$routes->add('detail', 'Siswa::detail');
	$routes->add('detail/(:num )', 'Siswa::detail/$1');
});
$routes->group('retribusi', function ($routes) {
	$routes->add('/', 'Retribusi::index');
	$routes->add('ssrd', 'Retribusi::ssrd');
	$routes->add('skrdlb', 'Retribusi::skrdlb');
	$routes->add('ssrd/(:num)', 'Retribusi::ssrd/$1');
	$routes->add('ssrd/save/(:num)', 'Retribusi::save/$1');
	$routes->add('ssrd/save', 'Retribusi::save');
});
$routes->group('penguji', function ($routes) {
	$routes->add('dashboard', 'Penguji::dashboard');
	$routes->add('/', 'Penguji::index');
	$routes->add('pengujian/(:num)', 'Penguji::pengujian/$1');
	$routes->add('pengujian/save/(:num)', 'Penguji::save/$1');
	$routes->add('ssrd/save/(:num)', 'Retribusi::save/$1');
	$routes->add('jadwal', 'Penguji::jadwal');
});
$routes->group('adminpenguji', function ($routes) {
	$routes->add('/', 'Adminpenguji::index');
	$routes->add('jadwal', 'Adminpenguji::jadwal');
	$routes->add('jadwal/num', 'Adminpengujian::penguji$1');
	$routes->add('jadwal/save/(:num)', 'Adminpenguji::save/$1');
});
$routes->group('user', function ($routes) {
	$routes->add('/', 'User::index');
	$routes->add('login', 'User::login');
	$routes->add('dashboard', 'User::dashboard');
	$routes->add('retribusi', 'User::retribusi');
	$routes->add('pengujian', 'User::pengujian');
	$routes->add('pengajuan', 'User::pengajuan');
	$routes->add('profil', 'User::profil');
});
// $routes->add('text', 'Text::index');

/**
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
