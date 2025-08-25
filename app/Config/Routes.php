<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about_us', 'About::index');
$routes->get('/team', 'Team::index');

$routes->get('/service', 'Service::index');
$routes->get('/details', 'Details::index');
