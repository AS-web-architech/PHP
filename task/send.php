<?php
include "conn.php";
if(isset($_POST['submit'])){
    
   $fname=$_POST['Fname'];
   $lname=$_POST['Lname'];
   $email=$_POST['email'];
   $pass=$_POST['password'];
   $insert="INSERT INTO `members`(`memberID`, `firstName`, `lastName`, `Email`, `Mpassword`) VALUES 
   ('','$fname','$lname','$email','$pass')";
   if(mysqli_query($conn,$insert)){
    echo "<script>alert(congragulations )</script>";
    echo "<script>window.location.href='welcome.php' </script>";
   }
   else{
    echo "error";
   }

   $to=$_POST['email'];
    $from="xoxocompany48@gmail.com";
    $subject="text mail via php";
    $message="assalamo alaikum";
    $header="from:$from";
    $mail=mail($to,$subject,$message,$header);
    if($mail){
        echo "<script>alert(congragulations )</script>";
        echo "<script>window.location.href='welcome.php' </script>";
        echo "email sent";
    }else{
        echo "error";
    }
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sending mail </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<br><br><br><br>
    <div class="container ">
        <h1 class="text-center text-lg bg-warning ">join us ! </h1>
        <h5 class="text-center text-danger"><small> to join us please register yourself</small></h5>
    </div><br><br>
    <div class="container">
    
        <form action="send.php" method="post">
        <div class="mb-3">
                <label  class="form-label">First Name:</label>
                <input type="text" class="form-control"name="Fname" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Last Name:</label>
                <input type="text" class="form-control"name="Lname" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="email" class="form-control"name="email" >
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control"name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-dark w-100" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>