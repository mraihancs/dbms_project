<?php
    include "../auth.php";
    $query="select * from user where email='".$_SESSION['email']."'";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/3299f686b9.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dosis&family=M+PLUS+Code+Latin&family=Open+Sans:wght@300&family=Zen+Kurenaido&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>Add Driver</title>
</head>

<body>
    


    <div class="container my-5 text-center d-float">
        <div class="container">
            <div class="main-body">

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="../images/team.png" alt="Admin"
                                        class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4> Add Driver</h4><hr>
                                       
                                        
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">

                            <form action="./op_add_driver.php" method="post">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Username</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="username" value="">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Addess</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="address" value="">  
                                            
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Phone</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="phone" value="">  
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5 class="mb-0">Age</h5>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="occu" value="">  
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-warning" name="submit" type="submit">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>

    <button style="margin-left:150px ;" class="btn btn-danger" name="back" ><a style="text-decoration:none ; color:white;" href="./index2.php">Back</a> </button>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>