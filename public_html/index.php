<?php
session_start();
require "vendor/autoload.php";
require 'bstrap.php';


//die(var_dump(require Router::load('routes.php')->direct('login', 'GET')));
//die(var_dump(require 'Routing/routes.php'));
require Router::load('routes.php')
    ->direct(Request::uri(),Request::method());



