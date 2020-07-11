<?php

class ExceptionHandler extends Controller
{



    function __construct($err)
    {
        parent::__construct();
        $this->view->message = $err;
    }

    function getView()
    {
        $this->view->getView('exceptionHandler/index');
    }
}
