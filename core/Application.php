<?php

require __DIR__ . "/Router.php";
require __DIR__ . "/Request.php";

class Application
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->router = new Router();
        $this->request = new Request();
    }

    public function run()
    {
        $method = $this->request->getMethod();
        $path = $this->request->getPath();
        $callback = $this->router->register[$method][$path] ?? false;
        if (!$callback) {
            echo "Not found";
            exit();
        }
        echo $callback();
    }
}