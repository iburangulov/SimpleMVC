<?php

namespace home\components;

class Router
{

    private $uri;
    private $routeList;

    public function __construct()
    {
        $this->uri = trim(htmlspecialchars($_SERVER['REQUEST_URI']), '/');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->routeList = require_once(POST_ROUTES);
        } else {
            $this->routeList = require_once(GET_ROUTES);
        }

    }

    public function run()
    {
        foreach ($this->routeList as $pattern => $path) {

            $pattern = '^' . $pattern . '$';

            if (preg_match("~$pattern~", $this->uri)) {
                $modified = preg_replace("~$pattern~", $path, $this->uri);
                $modified = explode('/', $modified);

                $controllerName = array_shift($modified) . 'Controller';
                $actionName = array_shift($modified);

                $controllerFile = CONTROLLERS_PATH . $controllerName . '.php';

                if (!file_exists($controllerFile)) {
                    die();
                }

                include_once $controllerFile;
                $controller = new $controllerName();

                call_user_func_array(array($controller, $actionName), $modified);

                break;
            }
        }
    }

}