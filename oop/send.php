<?php
$to="example@gmail.com";
$from="example@gmail.com";
$subject="text mail via php";
$message="assalamo alaikum";
$header="from:$from";
$mail=mail($to,$subject,$message,$header);
if($mail){
    echo "email sent";
}else{
    echo "error";
}









?>