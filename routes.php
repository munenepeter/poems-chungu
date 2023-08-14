<?php

$router->get('', 'PagesController@index');
$router->get('auth/login', 'AuthController@index');
$router->post('auth/login', 'AuthController@login');



//logs
$router->get(':system:/logs', 'SystemController@index');
$router->post(':system:/logs/delete', 'SystemController@deleteLogs');
//robots
$router->get('robots.txt', function (){
    return require __DIR__ ."/robots.txt";
});
