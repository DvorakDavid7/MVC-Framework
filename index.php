<?php

require __DIR__ . "/core/Application.php" ;

$app = new Application();


$app->router->get("/", function () {
    return "<h1>home</h1>";
});

$app->router->get("/about", function () {
    return "<h1>about</h1>";
});


$app->router->get("/contact", function () {
    return "<h1>contact</h1>";
});



$app->run();