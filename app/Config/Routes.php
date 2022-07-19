<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::index');
$routes->get('/home/contactUs', 'Home::contactUs');
// $routes->get('/about/index', 'About::index');
// $routes->get('/about/visi-misi', 'About::visi_misi');
// $routes->get('/about/(:any)/(:num)', 'About::visi_misi/$1/$2');
// $routes->get('/users', 'Admin\Users::index');
// $routes->get('/about/(:any)', 'About::visi_misi/$1');
// $routes->add('/coba', 'Home::coba');
// $routes->get('/about', function() {
//     echo 'Hello World!';
// });
$routes->get('/profile/(:num)/(:alpha)', 'Profile::index/$1/$2');
$routes->get('/staff/(:num)', 'Staff::index/$1');
$routes->get('/staff/(:any)', 'Staff::index/$1');
$routes->delete('admin/users/pojok-himsi/edit/(:segment)', 'Admin\Users::editPost/$1');
$routes->delete('admin/users/pojok-himsi/(:num)', 'Admin\Users::delete/$1');
$routes->delete('admin/users/akademik/(:num)', 'Admin\Users::deleteAka/$1');

$routes->get('/admin', 'Admin\Users::index');
$routes->get('/admin/login', 'Admin\Users::login');
$routes->get('/admin/logout', 'Admin\Users::logout');
$routes->post('/admin/loginProcess', 'Admin\Users::loginProcess');


$routes->get('/ekspresi', 'Ekspresi::index');

$routes->get('/beasiswa', 'Akademik::beasiswa');
$routes->get('/lomba', 'Akademik::lomba');
$routes->get('/webinar', 'Akademik::webinar');

$routes->get('/beasiswa/(:any)', 'Akademik::selfPage/$1');
$routes->get('/lomba/(:any)', 'Akademik::selfPage/$1');
$routes->get('/webinar/(:any)', 'Akademik::selfPage/$1');

$routes->get('/pojok-himsi', 'Pojok_Himsi::index');
$routes->get('/pojok-himsi/(:any)', 'Pojok_Himsi::selfPage/$1');


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
