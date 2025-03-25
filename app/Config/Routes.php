<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->add('/catalog', 'Home::catalog');
$routes->add('/about', 'Home::about');
$routes->add('/contact', 'Home::contact');
$routes->add('/cart', 'Home::cart');
$routes->add('/login', 'Home::login');
$routes->add('/signup', 'Home::signup');
