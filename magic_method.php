<?php

class Book {
    private $name;
    private $author;
    public static $gothere;
    private $data = array();
    function __construct($name, $author)
    {
        $this->name = $name;
        $this->author = $author;
    }
    public function __set($key, $value) {
        $this->data[$key] = $value;
    }
    public function __get($key) {
        if(array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            trigger_error("Your variable does not exists!", E_USER_ERROR);
        }
    }
    public function __call($name, $arguments) {
        var_dump($name);
        var_dump($arguments);
    }
    public static function __callStatic($name, $arguments) {
        var_dump($name);
        var_dump($arguments);
    }
}

Book::$gothere = "How are you";
Book::howdy("How are you?");

$book = new Book("The World is Flat", "Thomas Freadman");
$book->test = "Hello!";
echo $book->test;
$book->goThere("Aung Aung", "BEHS");


