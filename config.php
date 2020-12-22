<?php


require_once 'vendor/autoload.php';

define('ROOT', dirname(__FILE__) . '/');
define('GET_ROUTES', ROOT . 'routes/web.php');
define('POST_ROUTES', ROOT . 'routes/post.php');

define('CONTROLLERS_PATH', ROOT . 'controllers/');
define('MODELS_PATH', ROOT . 'models/');
define('VIEWS_PATH', ROOT . 'views/');

define('DB_NAME', 'test.loc');
define('DB_HOST', 'localhost');
define('DB_USER', 'test.loc');
define('DB_PASS', 'test229!');

define('USERS_TABLE_NAME', 'users');
