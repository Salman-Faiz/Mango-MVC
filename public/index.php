<?php
// Autoload classes
require_once __DIR__ . '/../vendor/autoload.php';

// echo "Hello, World!";

//get all routes
$routes = require_once __DIR__ . '/../routes/web.php';
// print_r($routes);

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
$request = $_SERVER['REQUEST_URI'];
// echo $request;
$request = explode('?', $request)[0]; // Remove query string remain in the  index 1
echo "<br>";
echo "Request URI: ";
echo $request;
if(isset($routes[$request])){
     echo "Route found";
     echo "<br>";
     // print_r($routes[$request]);
     $controllerName = $routes[$request][0] ?? null;
     $methodName = $routes[$request][1] ?? null;

     if ($controllerName && $methodName) {
         // Instantiate the controller
         $controller = new $controllerName();

         // Call the method
         if (method_exists($controller, $methodName)) {
             $controller->$methodName();
         } else {
             echo "Method not found";
         }
     }
}
?>