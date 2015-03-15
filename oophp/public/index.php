<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 2/21/15
 * Time: 10:48 AM
 */

define("DD", __DIR__ . "/..");

require DD . "/vendor/autoload.php";

$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];

$request_uri = explode('/', $request_uri);
$script_name = explode('/', $script_name);

$path_info = array_diff($request_uri, $script_name);
$path_info = array_values($path_info);

$route = array(
    'blog'          => 'BlogController@index'
);


if(array_key_exists($path_info[0], $route)) {
    $controller_key = array_shift($path_info);
    $controller = $route[$controller_key];
    $controller = explode('@', $controller);
    var_dump($path_info);
    call_user_func_array(array(new $controller[0], $controller[1]), $path_info);
} else {
    echo "404";
}