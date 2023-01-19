<?php
include "config.php";

$ID = $_GET['id'];
$delquery = "DELETE FROM users WHERE userID = '$ID' ";


if(mysqli_query($conn,$delquery)){

header("location: form.php");



} else{

    echo "error";


}









?>