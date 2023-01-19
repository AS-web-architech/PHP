
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
    <?php 
    
    include "config.php";
    if (isset($_GET["fetch"])) {

        $fetch = "SELECT * FROM users";
        $res = mysqli_query($conn, $fetch);

    
    
    
    ?>
    <div class="container mt-f">
<table class="table table-striped">
                <thead>
                    <tr>
                        <th>userid</th>
                        <th>firstName</th>
                        <th>lastName</th>
                        <th>Gender</th>
                        <th>country</th>
                        <th>city</th>
                        <th>document</th>
                        <th>operations</th>

                        <!-- <th>document</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($res)) {  ?>
                        <tr>
                            <td><?php echo $row["userID"] ?></td>
                            <td><?php echo $row["firstName"] ?></td>
                            <td><?php echo $row["lastName"] ?></td>
                            <td><?php echo $row["gender"] ?></td>
                            <td><?php echo $row["city"] ?></td>
                            <td><?php echo $row["country"] ?></td>
                            <td><?php  ?></td>
                             
                            <td>
                          
                               


                                <button class="btn btn-danger">
                                    <a href="delete.php?id=<?php echo $row["userID"] ?>" class="text-white "> Delete</a>
                                </button>
                            </td>
                            

                        </tr>
                    <?php       }    ?>
                </tbody>
            </table><br><br>
              <!-- launch button     -->
              <div class="container text-center"></div>
              <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <!-- <a href="?" -->
                                     <!-- class="text-white "> Update -->update
                                    </a></button>
                  <!-- popup modal  -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">udate ypur registration:</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
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
                                                    
                                                    <button type="submit" class="btn btn-primary" name="submit">
                                                        Submit</button><br><br>
                                                    <button type="submit" class="btn btn-primary" name="upload">upload</button>

                                                  
                                                </form>
                                                
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </div>
                                </div>
                                </div>                     



<?php }?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
