<?php

define("DD" , realpath(dirname(__FILE__) . "/.."));

require DD . "/vendor/autoload.php";

use Wpa18\Application\Application;

$app = new Application();

$app->run();

unset($app);


?>