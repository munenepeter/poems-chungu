<?php

$router->get('', 'PagesController@index');
$router->get('dashboard', 'PagesController@dashboard');

$router->get('auth/login', 'AuthController@index');
$router->post('auth/login', 'AuthController@login');
$router->post('auth/logout', 'AuthController@signout');

$router->get('dashboard/poems', 'PoemsController@index');
$router->post('dashboard/poems', 'PoemsController@create');

$router->get('dashboard/qoutes', 'QoutesController@index');
$router->post('dashboard/qoutes', 'QoutesController@create');



//logs
$router->get(':system:/logs', 'SystemController@index');
$router->post(':system:/logs/delete', 'SystemController@deleteLogs');
//robots
$router->get('robots.txt', function (){
    return require __DIR__ ."/robots.txt";
});
