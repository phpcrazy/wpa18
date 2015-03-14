<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 3/14/15
 * Time: 9:36 AM
 */

class View {
    public static function load($view, $data = null) {
        $file = DD . "/app/view/" . $view . ".php";

        if(file_exists($file)) {
            ob_start();

            if(is_array($data)) {
                extract($data);
            }
            require $file;
            ob_end_flush();
        } else {
            trigger_error("View file does not exists!", E_USER_ERROR);
        }

    }
}