<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/profile', 'AuthController::profile');
$routes->get('/login', 'AuthController::login');
$routes->get('/signup', 'AuthController::signup');
$routes->get('/', 'AuthController::main');
$routes->get('/dashboard', 'TaskController::index');

$routes->post('/register','AuthController::process');
$routes->post('/login','AuthController::pro_login');
$routes->post('/task','TaskController::task_process');
$routes->get('/logout','AuthController::process_logout');
$routes->get('/task', 'TaskController::task');