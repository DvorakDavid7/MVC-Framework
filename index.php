<?php
// throws an error if we tried to pass int to function which wants string
declare(strict_types=1);


// require __DIR__ . "/core/Application.php" ;
// require __DIR__ . "/Controllers/IndexController.php";


spl_autoload_register(function ($class) {
    if (strpos($class, "Controller")) {
        $base_path = __DIR__ . "/Controllers/";
    }
    else {
        $base_path = __DIR__ . "/core/";
    }
    $extension = ".php";
    $full_path = $base_path . $class . $extension;
    if (!file_exists($full_path)) {
        return false;
    }
    else {
        include_once $full_path;
    }
});



$app = new Application();

$app->router->get("/", [IndexController::class, "index"]);

$app->router->get("/about", [AboutController::class, "about"]);

$app->router->get("/contact", [ContactController::class, "contact"]);

$app->run();