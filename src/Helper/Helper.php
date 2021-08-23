<?php

namespace App\Helper;

class Helper {
    static function print($obj) {
        echo("<pre>");
        print_r($obj);
        echo("</pre>");
    }    
}