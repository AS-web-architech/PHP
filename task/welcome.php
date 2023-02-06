<?php
// include "conn.php";
// $email=$_POST['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <br><br><br><br>
    <div class="container text-center">
    <h1 class="text-success">congragulations!</h1>
    <h5 class="text-dark">you have been signed-up succesfully</h5>
    <p class="text-info">we,ve sent you an account activation email <?php $email ?> please check yor inbox</p>
    </div>
</body>
</html>