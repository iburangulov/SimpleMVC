<?php

namespace home\components;

use http\Header;

class Router
{

    private $uri;
    private $routeList;

    public function __construct()
    {
        $this->uri = trim(htmlspecialchars($_SERVER['REQUEST_URI']), '/');

        switch ($_SERVER['REQUEST_METHOD'])
        {
            case 'GET':
                $this->routeList = require_once (GET_ROUTES);
                break;
            case 'POST':
                $this->routeList = require_once (POST_ROUTES);
                break;
        }

    }

    public function run()
    {
        foreach ($this->routeList as $pattern => $path) {
            $pattern = '^' . $pattern . '$';

            if (preg_match("~$pattern~", $this->uri))
            {
                $modified = preg_replace("~$pattern~", $path, $this->uri);
                $modified = explode('/', $modified);

                $controllerName = array_shift($modified) . 'Controller';
                $actionName = array_shift($modified);

                $controllerFile = CONTROLLERS_PATH . $controllerName . '.php';

                try {
                    include_once $controllerFile;
                } catch (\Exception $ex)
                {
                    $_SESSION['errors'][] = [
                        $ex->getCode(),
                        $ex->getFile(),
                        $ex->getLine(),
                        $ex->getMessage(),
                    ];
                    header('Location: / ');
                }
                $controller = new $controllerName();

                call_user_func_array(array($controller, $actionName), $modified);

                break;
            }
        }
    }

}