<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->post('/sign-in', 'Home::signIn');
$routes->get('/sign-out', 'Home::signOut');
$routes->post('/search', 'Home::search');
// $routes->get('/searchGet', 'Home::searchGet');

$routes->get('/login', 'LoginController::login');
$routes->post('/add-user', 'LoginController::addUser');
$routes->get('/error', 'LoginController::error');

$routes->get('/contact', 'ContactController::contact');
$routes->get('/covid', 'CovidController::covid');

$routes->get('/amphitryon', 'AmphitryonController::amphitryon');
$routes->get('/amphitryon/create-apartment', 'AmphitryonController::createApartment');
$routes->post('/amphitryon/add-Apartment', 'AmphitryonController::addApartment');
$routes->get('/amphitryon/update-Apartment', 'AmphitryonController::updateApartment');
$routes->post('/amphitryon/change-Apartment', 'AmphitryonController::changeApartment');
$routes->get('/amphitryon/delete-Apartment', 'AmphitryonController::deleteApartment');
$routes->get('/amphitryon/close', 'AmphitryonController::close');
$routes->post('/amphitryon/data-personal', 'AmphitryonController::changeDataPersonal');
$routes->get('/amphitryon/error', 'AmphitryonController::error');

$routes->get('/invited', 'InvitedController::invited');
$routes->post('/invited/data-personal', 'InvitedController::changeDataPersonal');
$routes->get('/invited/delete-booking', 'InvitedController::deleteBooking');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
