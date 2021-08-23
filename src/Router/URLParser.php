<?php

namespace App\Router;

class URLParser {

    /**
     * Checa se um path possui variaveis
     * @param string $url
     * @return bool
     */
    static function hasVariables($url) {
        return preg_match("/:/", $url);
    }
}