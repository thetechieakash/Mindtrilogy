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
    $routes->group('Softwere_Apps', static function ($routes) {
        $routes->get('', 'Softapp\Softapp::index');
        $routes->get('Web_Development', 'Softapp\Webdev::index');
        $routes->get('Mobile_Apps', 'Softapp\Mobapp::index');
        $routes->get('Custom_Solutions', 'Softapp\Cstmsol::index');
    });
    $routes->group('Cloud_Devops', static function ($routes) {
        $routes->get('', 'Cloud\Cloud::index');
        $routes->get('Cloud_Migration', 'Cloud\Clmig::index');
        $routes->get('CI_CD_Pipeline', 'Cloud\Cicd::index');
        $routes->get('Infrastructure_as_Code', 'Cloud\Infacode::index');
    });
});
$routes->get('careers', 'Careers::index');
$routes->get('life_at_mindtrilogy', 'Life::index');
$routes->get('Contact', 'Contact::index');
$routes->set404Override(function () {
    return view('Error_404');
});
// $routes->get('/service', 'Service::index');
// $routes->get('/details', 'Details::index');
