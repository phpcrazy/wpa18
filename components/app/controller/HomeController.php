<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 3/27/15
 * Time: 11:28 AM
 */

class HomeController {

    public function __construct() {
        echo "Constructor!";
    }

    public function actionIndex() {
        echo "Hello from HomeController";
    }
}