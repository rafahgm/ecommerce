<?php

namespace App\Router;

class Route {
    private $path;
    private $group;
    private $callback;
    private $method;

    public function __construct($method, $path, $group, $callback)
    {
        $this->method = $method;
        $this->path = $path;
        $this->group = $group;
        $this->callback = $callback;
    }

    public function getPath() {
        return $this->path;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getCallback() {
        return $this->callback;
    }
}