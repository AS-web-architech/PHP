<?php

// print the sum of two numbers
 
$sum=10+5;
echo $sum;
echo "<br>";

// Code a function having static variable.
 
function hello(){
    static $var=5;
    ++$var;
    echo $var ."<br>";
} 
echo hello();

// // initialize variables of all PHP data types.

// var_dump(var_dump(1,2.1,true,array("apple","mango","banana")));

$a = $_POST["Name"];
$b = $_POST["Email"];
$x = $_POST["password"];
echo $a."<br>".$b."<br>".$x;


?>