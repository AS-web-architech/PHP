<?php
$localhost="localhost";
$user="root";
$password="";
$db="registration";
$port="3306";

$conn=mysqli_connect($localhost,$user,$password,$db,$port);
 if ($conn){
    echo "connection established";
 }
 else{
    echo "error";
 }







?>