<?php

include "config.php";
$fName = $_POST['fname'];
$lName = $_POST['lname'];
$Gender = $_POST['gender'];
$city =  $_POST['country'];
$country = $_POST['city'];
$insertQuery = "INSERT INTO users(firstName , lastName ,gender,city, country ) VALUES 
 ('$fName' ,'$lName','$Gender' , '$city','$country')";

if (isset($_POST['submit'])) {

    if (mysqli_query($conn, $insertQuery)) {


        echo "record insert !";
    } else {


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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-7px">
    <form action="form.php" method="post">
    <div class="mb-3">
            <label for="studentname" class="form-label">firstname</label>
            <input type="text" class="form-control" id="studentname" name="fname">
        </div>
        <div class="mb-3">
            <label for="studentname" class="form-label">lastname</label>
            <input type="text" class="form-control" id="studentname" name="lname">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">gender</label>
            <input type="radio" id="exampleInputPassword1" value="male" name="gender">male
            <input type="radio" id="exampleInputPassword1" value="female" name="gender">female
        </div>
        <div class="mb-3">
            <label for="studentname" class="form-label">city</label>
            <input type="text" class="form-control" id="studentname" name="city">
        </div>
        <div class="mb-3">
            <label for="studentname" class="form-label">country</label>
            <input type="text" class="form-control" id="studentname" name="country">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        
<!-- <form action="form.php">
<input type="file"  name="upload" value ="upload"><br><br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form> -->

    </form>
   
    <form action="display.php">
    <button type="submit" class="btn btn-primary" name="fetch">fetch</button><br><br>

    
    </form>
</div>

<!-- <?php if (isset($_FILES['upload'])) {

// print_r($_FILES['upload']);

// $fileName = $_FILES['upload']['name'];
// $tmpName = $_FILES['upload']['tmp_name'];
// echo $fileName;

// if (move_uploaded_file($tmpName, "uploads/" . $fileName)) {


//     echo "file uploaded";
// } else {

//     echo "error";
// }
// }

?>    -->



</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>