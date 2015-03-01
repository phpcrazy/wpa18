<?php
/**
 * Created by PhpStorm.
 * User: soethiha
 * Date: 2/21/15
 * Time: 10:48 AM
 */

define("DD", __DIR__ . "/..");

require DD . "/vendor/autoload.php";


// SELECT * FROM users;
//$users = DB::table('students')->get();
//var_dump($users);
//
//
//$product = DB::table("products")->get();

$user = DB::table("students")->where('name', 'Aung Aung')->get();

var_dump($user);


$product = DB::table("products")->where('name', 'iPad')->get();
var_dump($product);
$product_array = array(
    'name'      => 'iPhone',
    'quantity'  => '5',
    'price'     => '800000'
);

$product_id = DB::table('products')->insert($product_array);
//var_dump($products);
// SELECT * FROM users WHERE username = "Aung Aung"
// DB::table('users')->where('username', 'Aung Aung')->get();

var_dump(memory_get_usage());
// Book
// Category
// Author