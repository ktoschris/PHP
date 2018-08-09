<?php

/*$router->define([
    '' =>'Controllers/main.php',
    'login' => 'Controllers/logIn.php',
    'register' => 'Controllers/register.php',
    'logmein' => 'functions/logIn.php',
    'logmeout' => 'functions/logout.php',
    'registerme' => 'functions/registeruser.php',
    'addfirma' => 'functions/addfirma.php',
    'showfirmy' => 'functions/showfirmy.php'
]);*/

$router->get('', 'PagesController@home');
$router->get('login', 'PagesController@login');
$router->get('register', 'PagesController@register');
$router->get('logmeout', 'PagesController@logout');

$router->get('edituser', 'PagesController@edituser');
$router->post('showuser', 'PagesController@showuser');

//$router->get('editfirma', 'PagesController@editfirma');
$router->post('editfirmaview', 'PagesController@editfirmaview');
$router->post('editfirma', 'PagesController@editfirma');
$router->get('showfirmy', 'PagesController@showfirmy');

$router->post('registerme', 'PagesController@registerme');
$router->post('logmein', 'PagesController@logmein');