<?php

class Request
{
    public static function uri()
    {
        //die(var_dump(trim($_SERVER['REQUEST_URI'], '/')));
        return (trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/'));
    }

    public static function method()
    {
        //die(var_dump($_SERVER['REQUEST_METHOD']));
        return $_SERVER['REQUEST_METHOD'];
    }
}