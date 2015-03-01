<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 2/22/15
 * Time: 10:13 AM
 */

class DB extends PDO {

    private static $_instance = null;

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    private $table_name = null;
    private $where_key = null;
    private $where_value = null;

    public function __construct(){
        $this->engine = Config::database('engine');
        $this->host = Config::database('host');
        $this->database = Config::database('database');
        $this->user = Config::database('user');
        $this->pass = Config::database('pass');
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass );

        echo  "Constryc";
    }

    public function __destruct() {
        echo "DEWERWERW ";
    }

    public static function table($table_name) {
        if(!self::$_instance instanceof DB) {
            self::$_instance = new DB();
        }
        self::$_instance->table_name = $table_name;
        return self::$_instance;
    }

    public function where($key, $value) {
        $this->where_key = $key;
        $this->where_value = $value;
        return $this;
    }

    public function get() {
        // return SELECT * FROM $table_name;
        if($this->where_key == null && $this->where_value == null) {
            $sql = "SELECT * FROM " . $this->table_name;
        } else {
            $sql = "SELECT * FROM "
                . $this->table_name . " WHERE "
                . $this->where_key . ' = "' . $this->where_value . '"';
        }


        $query = $this->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}