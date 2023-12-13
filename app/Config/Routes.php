<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/register', 'Register::index');
$routes->get('/dashboard', 'Dashboard::index');


// Dashboard page Routing user

$routes->get('/dashboard/all_user', 'UserController::alluser');
$routes->get('/dashboard/add_user', 'UserController::adduser');
$routes->post('/dashboard/add_user', 'UserController::adduser');
$routes->get('/dashboard/edit_user/(:num)', 'UserController::edit/$1');
$routes->post('/dashboard/update_user/(:num)', 'UserController::update/$1');
$routes->get('/dashboard/delete_user/(:num)', 'UserController::delete/$1');



//gatekeepers
$routes->get('/dashboard/all_gk', 'GkController::index');
$routes->get('/dashboard/add_gk', 'GkController::addgk');
$routes->post('/dashboard/add_gk', 'GkController::addgk');
$routes->get('/dashboard/edit_gk/(:num)', 'GkController::edit/$1');
$routes->post('/dashboard/update_gk/(:num)', 'GkController::update/$1');
$routes->get('/dashboard/delete_gk/(:num)', 'GkController::delete/$1');


//flat Details
$routes->get('/dashboard/all_flat', 'FlatController::index');
$routes->get('/dashboard/add_flat', 'FlatController::addflat');
$routes->post('/dashboard/add_flat', 'FlatController::addflat');
$routes->get('/dashboard/edit_flat/(:num)', 'FlatController::edit/$1');
$routes->post('/dashboard/update_flat/(:num)', 'FlatController::update/$1');
$routes->get('/dashboard/delete_flat/(:num)', 'FlatController::delete/$1');


//payment
$routes->get('/dashboard/all_pay', 'PayController::index');
$routes->get('/dashboard/add_pay', 'PayController::addpay');
$routes->post('/dashboard/add_pay', 'PayController::addpay');
$routes->get('/dashboard/edit_pay/(:num)', 'PayController::edit/$1');
$routes->post('/dashboard/update_pay/(:num)', 'PayController::update/$1');
$routes->get('/dashboard/delete_pay/(:num)', 'PayController::delete/$1');