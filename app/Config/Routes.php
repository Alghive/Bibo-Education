<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Routes Admin
$routes->setAutoRoute(true);
$routes->get('/', 'Matkul::index');
$routes->get('/matkul/index', 'Matkul::index');
$routes->get('/matkul/about', 'Matkul::about');
$routes->get('/matkul/create', 'Matkul::create');
$routes->get('/matkul/(:segment)', 'Matkul::detail/$1');
$routes->delete('/matkul/(:num)', 'Matkul::delete/$1');
$routes->get('/matkul/edit/(:segment)', 'Matkul::edit/$1');

// Routes Admin

// Routes Users
$routes->get('/users/e_learning', 'Users::e_learning');
// Routes Users