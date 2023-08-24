<?php

$router->get('', 'PagesController@index');
$router->get('dashboard', 'PagesController@dashboard');

$router->get('auth/login', 'AuthController@index');
$router->post('auth/login', 'AuthController@login');
$router->post('auth/logout', 'AuthController@signout');

$router->get('poems', 'PoemsController@all');
$router->get('poems/{id}', 'PoemsController@show');


//poems
$router->get('admin/poems', 'PoemsController@index');
$router->post('admin/poems/create', 'PoemsController@create');
$router->post('admin/poems/edit', 'PoemsController@edit');
$router->post('admin/poems/publish', 'PoemsController@publish');
$router->post('admin/poems/delete', 'PoemsController@delete');

$router->get('admin/qoutes', 'QoutesController@index');
$router->post('admin/qoutes/create', 'QoutesController@create');


//subscribers
$router->post('subscribe', 'SubscribersController@create');
//mail
$router->get('mail', 'SubscribersController@viewMail');

//api
$router->get('api/poems', 'ApiController@allpoems');




//logs
$router->get(':system:/logs', 'SystemController@index');
$router->post(':system:/logs/delete', 'SystemController@deleteLogs');
//robots
$router->get('robots.txt', function () {
    return require __DIR__ . "/robots.txt";
});
