<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 2/21/15
 * Time: 10:47 AM
 */

class Config {

    public static function __callStatic($name, $arguments) {
        $file = DD . "/app/config/" . $name . '.php';
        if(file_exists($file)) {
            $data = require $file;
            return $data[$arguments[0]];
        } else {
            trigger_error("File does not exist in app/config folder", E_USER_ERROR);
        }

    }
}