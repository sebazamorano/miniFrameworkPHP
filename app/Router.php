<?php
namespace Mini;


use Exception;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static();
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $method
     * @throws Exception
     */
    public function execute($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            //version lenta
            /*$controller = explode('@', $this->routes[$method][$uri]);
            $this->callAction($controller[0], $controller[1]);*/
            //version rapida
            $this->callAction(...explode('@', $this->routes[$method][$uri]));
        } else {
            throw new Exception('No existe la ruta', 404);
        }
    }

    /**
     * @param $controller
     * @param $action
     * @return mixed
     * @throws Exception
     */
    protected function callAction ($controller, $action)
    {
        $controller = "Mini\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception('No existe metodo');
        }

        return $controller->$action();
    }




}