<?php

require __DIR__ . "/core/Application.php" ;

$app = new Application();


$app->router->get("/", function () {
    include "./public/index.html";
});

$app->router->get("/about/", function () {
    return "<h1>about</h1>";
});


$app->router->get("/public/", function () {
    return "public";
});



$app->run();