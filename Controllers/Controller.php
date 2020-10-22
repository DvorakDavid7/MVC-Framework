<?php


class Controller
{
    protected static function renderView(string $view)
    {
        $path = "./views/$view.php";
        if (!file_exists($path)) {
            return false;
        }
        else {
            require_once $path;
        }
    }
}
