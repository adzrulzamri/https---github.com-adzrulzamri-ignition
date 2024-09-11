<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/profile', 'AuthController::profile');
$routes->get('/login', 'AuthController::login');
$routes->get('/signup', 'AuthController::signup');
$routes->get('/', 'AuthController::main');
