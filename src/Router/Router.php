<?php

namespace App\Router;

use App\Helper\Helper;
use App\Http\Request;

class Router {
    private $routes;
    private $variableRoutes;

    public function __construct()
    {
        $this->routes = [];
        $this->variableRoutes = [];
    }

    public function addRoute($method, $path, $group, $callback) {
        $route = new Route($method, $path, $group, $callback);

        if(URLParser::hasVariables($route->getPath())) {
            array_push($this->variableRoutes, $route);
        }else {
            array_push($this->routes, $route);
        }
       
    }

    /**
     * Encontra uma rota pré definida dado um request
     * @param Request $request
     * @return callback $callback
     */
    public function find(Request $request) {
        $found = false;
        foreach($this->routes as $route) {
            if($route->getPath() === $request->getURL() && $route->getMethod() === $request->getMethod()) {
                // Encontrou uma rota
                $found = true;
                $route->getCallback()($request);
            }
        }

        // Não foi encontrada uma rota exata, buscar nos wildcards
        if(!$found) {
            foreach($this->variableRoutes as $route) {
                preg_match("#:[a-z]*#", $route->getPath(), $matches);
                Helper::print($matches);
            }
        }
    }
}