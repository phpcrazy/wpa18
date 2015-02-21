<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 2/21/15
 * Time: 10:48 AM
 */

define("DD", __DIR__ . "/..");

require DD . '/wpa18/library/ConfigReader.php';
require DD . '/wpa18/provider/ViewLoader.php';


View::load('home');

View::load('blog');

View::load('test');

// Book
// Category
// Author