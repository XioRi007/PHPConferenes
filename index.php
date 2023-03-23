<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require('./components/autoload.php');
define('ROOT', dirname(__FILE__));
use Components\Router;
$router = new Router;
//session_start();
$router->run();