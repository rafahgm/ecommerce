<?php

namespace App;

use App\Helper\Helper;
use App\Http\HttpMethod;
use App\Http\Request;
use App\Router\Router;

class App {

    private $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run() {
        // Generate Request Object
        $request = new Request($_SERVER["REQUEST_METHOD"], $_SERVER["REQUEST_URI"]);
        Helper::print($this->router);
        $this->router->find($request);
    }

    /**
     * Adiciona uma Rota no Método GET
     * @param string $path
     * @param callback $callback
     */
    public function get($path, $callback) {
        $this->router->addRoute(HttpMethod::GET, $path, "", $callback);
    }
}