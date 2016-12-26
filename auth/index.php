<?php

require_once __DIR__ ."/vendor/autoload.php";

// phase one login and registration

use RohitAuth\Routes\RegisterRoutes;
use RohitAuth\Routes\Http\Request;
use RohitAuth\Routes\Http\Routes;

$request = new Request();
$route = new Routes($request);
$routes = new RegisterRoutes($route);


require_once __DIR__ . "/src/Views/phase1/header.php";

require_once __DIR__ . "/src/Views/phase1/body.php";

require_once __DIR__ . "/src/Views/phase1/footer.php";
print $routes->initRoute();
