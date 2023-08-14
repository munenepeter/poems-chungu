<?php

$router->get('', 'PagesController@index');
$router->get('dashboard', 'PagesController@dashboard');

$router->get('auth/login', 'AuthController@index');
$router->post('auth/login', 'AuthController@login');
$router->post('auth/logout', 'AuthController@signout');


//logs
$router->get(':system:/logs', 'SystemController@index');
$router->post(':system:/logs/delete', 'SystemController@deleteLogs');
//robots
$router->get('robots.txt', function (){
    return require __DIR__ ."/robots.txt";
});
