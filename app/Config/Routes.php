<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about_us', 'About::index');
$routes->get('team', 'Team::index');
$routes->get('approach', 'Approach::index');

$routes->group('services', static function ($routes) {
    $routes->get('', 'Services::index');
    $routes->group('IT_Consulting', static function ($routes) {
        $routes->get('', 'InfoTech\Infotech::index');
        $routes->get('IT_Strategy', 'InfoTech\Itstrategy::index');
        $routes->get('Digital_Transformation', 'InfoTech\Digitrf::index');
        $routes->get('Tech_Assessments', 'InfoTech\Techasmnt::index');
    });
});
$routes->set404Override(function () {
    return view('Error_404');
});
// $routes->get('/service', 'Service::index');
$routes->get('/details', 'Details::index');
