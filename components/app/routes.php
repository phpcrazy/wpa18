<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 3/27/15
 * Time: 11:22 AM
 */

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;


$routes = new RouteCollection(); // Collection of Route

$routes->add("home",
    new Route("/", array(
        "_controller" => "HomeController::actionIndex"
    )));

$routes->add("blog",
    new Route('/blog/{name}', array(
        "_controller"   => "BlogController::actionIndex"
    )));


return $routes;