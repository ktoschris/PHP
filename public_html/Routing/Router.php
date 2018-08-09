<?php

class Router
{
    //protected $routes = [];

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;
        //die(var_dump($router));
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        //die(var_dump($uri, $requestType));
        //die(var_dump($uri,$requestType));
        if(array_key_exists($uri, $this->routes[$requestType]))
        {
            var_dump($uri, $requestType);
           // return $this->routes[$requestType][$uri];
            return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
        }
        else
            {
                var_dump($uri, $requestType);
            echo "nima takiej strony";
            die();
        }
        //throw new Exception('No route like this!');
    }

    protected function callAction($controller, $action)
    {
        //die(var_dump($controller, $action));
        $controller = new $controller;

        if(!method_exists($controller, $action))
        {
            //throw new Exception(
              //  "{$controller} does not respond to the {$action} action."
            //);
            echo "{$controller} does not respond to the {$action} action.";
        }
        return(new $controller)->$action();
    }

}

