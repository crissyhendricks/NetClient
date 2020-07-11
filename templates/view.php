<?php

class View
{
    function __construct()
    {
        
    }

    function getView($view)
    {
        require 'views/' . $view . '.php';
    }
}
