<?php
include "./auth.php";
$query="select * from driver where id=".$_GET['id'].";";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result);


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS --> 
    <title>Dashboard(TMS)</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="shortcut icon" href="../images/team.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
  <div class="wrapper">
       


    <div class="container my-5 text-center d-float">
        <div class="container" style="margin-left: 150px";>
            <div class="main-body">

                <div class="row gutters-sm">
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="./images/team.png" alt="User"
                                        class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4><?php echo $row['Name']; ?></h4><hr>
                            
                                        <p class="text-secondary mb-1">Professional Driver</p>
                                        <hr>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 class="mb-0">Full Name</h5>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                       <?php echo $row['Name'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 class="mb-0">Phone</h5>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $row['Phone'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 class="mb-0">Age</h5>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $row['Age'] ?>
                                    </div>
                                </div>
                                <hr>
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 class="mb-0">Address</h5>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $row['Address'] ?>
                                    </div>
                                </div>
                                <hr>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>

    <button style="margin-left:50rem ;" class="btn btn-success" name="back" ><a style="text-decoration:none ; color:white;" href="./user/index2.php">Back</a> </button>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  
  </body>
</html>


