<?php

require 'vendor/autoload.php';

require_once 'config/config.php';
require_once 'includes/database.php';
require_once './templates/controller.php';
require_once './templates/model.php';
require_once './templates/view.php';

require_once './controllers/exceptions.php';

session_start();

class App
{

    function __construct()
    {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = explode('/', rtrim($url, '/'));

        $controllerRoute = 'controllers/' . $url[0] . '.php';

        if (empty($url[0])) {
            $controllerRoute = 'controllers/main.php';
            require_once $controllerRoute;
            $controller = new Main();
            $controller->getModel("main");
            $controller->getView();
            return false;
        }

        if (file_exists($controllerRoute)) {

            require_once $controllerRoute;

            $controller = new $url[0];
            $controller->getModel($url[0]);


            $nparam = sizeof($url);

            if ($nparam > 1) {
                if ($nparam > 2) {
                    $param = [];
                    for ($i = 2; $i < $nparam; $i++) {
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                } else {
                    $controller->{$url[1]}();
                }
            } else {
                $controller->getView();
            }
        } else {

            $controller = new ExceptionHandler("Error");
            $controller->getView();
        }
    }
}
