<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */






$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('auth/register', 'Auth::register');
$routes->post('auth/store', 'Auth::store');

$routes->post('contact_us/store', 'ContactUsController::store');
