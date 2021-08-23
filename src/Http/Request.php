<?php

namespace App\Http;

class Request {
    /**
     * Método da request
     * @var string
     */
    private $method;

    /**
     * URL da request
     * @var string
     */

    private $url;

    /**
     * Construtor da classe Request
     * @param string $method Método da requisição
     * @param string $url URL da request
     */
    public function __construct($method, $url)
    {
        $this->method = $method;
        $this->url = $url;
    }

    /**
     * Retorna o método da Request
     * @return string
     */
    public function getMethod() { return $this->method; }

     /**
     * Retorna a URL da Request
     * @return string
     */
    public function getURL() { return $this->url; }
}