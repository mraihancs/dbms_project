
<?php
include "../auth.php";

if(!isset($_SESSION['email']))
{
  header("location:../login.php");
}

$query="select * from user where email='".$_SESSION['email']."'";
$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result);







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard(TMS)</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="shortcut icon" href="../images/team.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">



</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2><i class="fas fa-home"></i>&nbsp;Dashboard</h2>
            <ul>
                <li><a href="../user/index2.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="../user/profile.php"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="bill.php"><i class="fas fa-address-card"></i>PayBill</a></li>
                <li><a href="../areainfo.php"><i class="fas fa-project-diagram"></i>Area Info</a></li>
                
                <li><a href="../contact.php"><i class="fas fa-address-book"></i>Complaint</a></li>
                
                <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                <hr>
                <?php
                    if($_SESSION['role']=="admin"){
                       echo "<h3 style='font-size:20px;color:white;margin-top:10px;margin-bottom:10px;text-align:center;'>Admin Tools</h3>";
                        echo "<li><a href='./add_driver.php'><i class='fas fa-sign-out-alt'></i>Add Driver</a></li>";
                        echo "<li><a href='./add_admin.php'><i class='fas fa-sign-out-alt'></i>Add Admin</a></li>";
                        echo "<li><a href='./delete.php'><i class='fas fa-sign-out-alt'></i>Delete User</a></li>";
                        echo "<li><a href=''><i class='fas fa-sign-out-alt'></i>Payment Review</a></li>";
                        echo "<li><a href='./pay_view.php'><i class='fas fa-sign-out-alt'></i>Complaint Review</a></li>";
                    }
                ?>
            </ul>
            <div class="social_media">
                <a href="../team.php"><i class="fab fa-facebook-f"></i></a>
                <a href="../team.php"><i class="fab fa-twitter"></i></a>
                <a href="../team.php"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <div class="header"><b>Hey <?php echo ($_SESSION['username']); ?> (<?php echo ($_SESSION['role']); ?>),&nbsp;Have a nice day!! &#128513;</b></div>

            <div style="margin-top:10rem;" class="container my-5 text-center d-float">
        <div class="container" ;>
            <div class="main-body">

                <div class="row gutters-sm">
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-5">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 style="font-size:20px; color:white ;" class="mb-0">Username*:</h5>
                                    </div>
                                    <br>
                                    <div class="col-sm-9 text-secondary">
                                       <?php echo $row['username'] ?>
                                    </div>

                                </div>
                                <br>
                                <hr>
                                 <br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 style="color:white ;font-size:20px;" class="mb-0">Email*:</h5>
                                    </div>
                                    <br>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $row['email'] ?>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 style="color:white ;font-size:20px;" class="mb-0">Phone*:</h5>
                                    </div>
                                    <br>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $row['phone'] ?>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 style="color:white ;font-size:20px;" class="mb-0">Address*:</h5>
                                    </div>
                                    <br>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $row['address'] ?>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5 style="color:white ;font-size:20px;" class="mb-0">Occupation*:</h5>
                                    </div>
                                    <br>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $row['occupation'] ?>
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

        </div>

    </div>


    

    
  



       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>