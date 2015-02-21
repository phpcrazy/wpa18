<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 2/21/15
 * Time: 11:36 AM
 */

class View {
    private static $_instance = null;
    public function __construct() {
        echo "Constructot!";
    }
    public function __destruct() {
        echo "Destruct!";
    }
    public static function load($view)
    {
        if (!self::$_instance instanceof View) {
            self::$_instance = new View();
        }
        echo $view;
        return static::$_instance;
    }
}