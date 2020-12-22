<?php
session_start([
    'cookie_lifetime' => 86400,
]);

use home\components\Router;

require_once '../config.php';

(new Router())->run();
