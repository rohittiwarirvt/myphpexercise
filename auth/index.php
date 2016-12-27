<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ ."/vendor/autoload.php";

// phase one login and registration

use RohitAuth\Routes\Http\Request;
use RohitAuth\Routes\Http\Routes;
use RohitAuth\Routes\RegisterRoutes;
use RohitAuth\Container\App;

$request = new Request();
$route = new Routes($request);
$routes = new RegisterRoutes($route);

$routes->initRoute();
$app = new App();
$result['content'] = $route->startListening();
$result['title'] = "This is awsome project";
print $app->render($result);
