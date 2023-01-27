<?php 
session_start();

include "conn.php";

$to=$_POST['receiverName'];
$from=$_POST['senderName'];
$sub=$_POST['subject'];
$message=$_POST['message'];
$headers="from: $from ";
$mail=mail($to,$sub,$message,$headers);
if(isset($_POST['send'])){
   if($mail){
    echo "email sent";
}
else{
    echo  "error";
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div class="container text-center mt-5">
    <h1>
        welcome <?php echo $_SESSION['user'] ?>!
         

    </h1>
    <form action="logout.php" method="post"  >

        <button type="submit" name="logout" class="btn btn-warning ">logout</button>
    </form>
<br>
<br>
<div class="container bootdey">
<div class="email-app">
   
    <main>
        <button class="text-center btn btn-danger" >New Message</button>
        <form action="profile.php" method="post">
            <div class="form-row mb-3">
                <label for="to" class="col-2 col-sm-1 col-form-label">To:</label>
                <div class="col-10 col-sm-11">
                    <input type="email" class="form-control" id="to"  name="receiverEmail" placeholder="Type email">
                </div>
            </div>
            <div class="form-row mb-3">
                <label for="cc" class="col-2 col-sm-1 col-form-label">from:</label>
                <div class="col-10 col-sm-11">
                    <input type="email" class="form-control" id="cc" name="senderEmail" placeholder="Type email">
                </div>
            </div>
            <div class="form-row mb-3">
                <label for="bcc" class="col-2 col-sm-1 col-form-label">subject:</label>
                <div class="col-10 col-sm-11">
                    <input type="text" class="form-control" id="bcc" name="subject" placeholder="Type email">
                </div>
            </div>
            <div class="form-group mt-4">
                    <textarea class="form-control" id="message" name="message" rows="12" placeholder="Click here to reply"></textarea>
                </div><br><br>
                <div class="form-group">
                    <button type="submit" name="send" class="btn btn-success">Send</button>
                    <button type="submit" class="btn btn-light">Draft</button>
                    <button type="submit" class="btn btn-danger">Discard</button>
                </div>
            </div>
        </form>
      
              
        </div>
    </main>
</div>
</div>
    </div> 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>