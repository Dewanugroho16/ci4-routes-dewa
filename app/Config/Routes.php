<?php

$routes->get('/', 'Home::index');
$routes->get('/about', 'Pages::about');

$routes->get('product/(:num)', 'Product::view/$1');

$routes->get('user', 'User::index');
$routes->post('user', 'User::create');
$routes->put('user/(:num)', 'User::update/$1');
$routes->delete('user/(:num)', 'User::delete/$1');

$routes->group('admin', function($routes){
    $routes->get('dashboard', 'Home::admin');
});
