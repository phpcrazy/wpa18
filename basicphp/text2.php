<?php 

$num = 667;

$str = 'abcdef';
echo gettype($num); // *
echo "<br />";
echo strlen($num); // *

$number = "1";

if ($number % 2 == 0) {
  print "It's even";
} else {
	print "It's odd";
}


$num1 = -56;

if($num1 >= 0) {
	print "It's plus";
 } else {
 	print "It's minus";
 }

 $num2 = 782;

 $num2 = strval($num2);

 print strrpos($num2, "8");

$name = "Soe Thiha Naung";

echo trim($name, "Soe");
$array = explode(" ", $name);
var_dump($array);
 ?>
