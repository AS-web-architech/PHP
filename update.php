<?php
include "config.php"

$id = $_GET['userID'];
$getData = "SELECT * FROM set users WHERE  userID = '$id' ";



$res = mysqli_query($conn, $getData);

if ($res) {

    $row =  mysqli_fetch_assoc($res);
    $userid = $row['userID'];
    $fname = $row['firstName'];
    $lname = $row['lastName'];
    $gender = $row['gender'];
    $country = $row['country'];
    $city = $row['city'];

}
?>