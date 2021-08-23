<?php

require_once("./vendor/autoload.php");

use App\App;

$app = new App();

$app->get("/teste", function($req){
    echo("/teste");
});

$app->get("/teste/login", function($req){
    echo("/teste/login");
});

$app->get("/teste/:id", function($req){
    echo("/teste/:id");

});
$app->run();