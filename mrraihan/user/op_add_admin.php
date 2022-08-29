<?php
    include "../auth.php";


    $user=$_POST['username'];
    $email=$_POST['email'];
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);
 
    $phone=$_POST['phone'];
   
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $occu=$_POST['occu'];
    $role=$_POST['role'];

    

    if(empty($user)||empty($email)||empty($pass)||empty($cpass)||empty($phone)||empty($address)||empty($gender)||empty($occu)||empty($role)){
        echo "<script>window.location = './profile.php?error'</script>";
        exit();
    }
  

    $sql = "INSERT INTO user(username,email,password,rpassword,phone,address,gender,occupation,role) VALUES ('$user','$email','$pass','$cpass','$phone','$address','$gender','$occu','$role');";
  

    if (mysqli_query($conn, $sql)) {
        ?>
          <script>
            alert("Admin added successfully");
          </script>
          <?php
        }

    else {
       echo "Error: " . $sql . ":-" . mysqli_error($conn);
       echo "
       <div class='alert alert-danger' role='alert'>
             Error!
         </div>";
       
   }

    echo "<script>window.location = './index2.php'</script>";


?>