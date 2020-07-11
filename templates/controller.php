<?php

class Controller
{

    function __construct()
    {
        $this->view = new View();
    }

    function getModel($model)
    {

        $url = 'models/' . $model . 'model.php';

        if (file_exists($url)) {
            require $url;

            $modelname = $model . 'Model';
            $this->model = new $modelname();
        }
    }
}
