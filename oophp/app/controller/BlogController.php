<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 3/14/15
 * Time: 10:25 AM
 */

class BlogController {
    public function __construct() {
        echo "Constructor!";
    }

    public function index($arg1, $arg2) {
        var_dump($arg1);
        var_dump($arg2);
        echo "Hello from BlogController ";
    }

    public function __destruct() {

    }
}