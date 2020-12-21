<?php

namespace home\components;

class Router
{

    private $uri;
    private $routeList;

    public function __construct()
    {
        $this->uri = trim(htmlspecialchars($_SERVER['REQUEST_URI']), '/');
        $this->routeList = require_once(ROUTES);
    }

    public function run()
    {
        foreach ($this->routeList as $pattern => $path)
        {

        }
    }

}