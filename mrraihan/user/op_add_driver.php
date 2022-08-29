<?php
    include "../auth.php";


    $user=$_POST['username'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $occu=$_POST['occu'];

    

    if(empty($user)||empty($phone)||empty($address)||empty($occu)){
        echo "<script>window.location = './profile.php?error'</script>";
        exit();
    }
  

    $sql = "INSERT INTO driver(Name,Phone,Address,Age) VALUES ('$user','$phone','$address','$occu');";
  

    if (mysqli_query($conn, $sql)) {
        ?>
          <script>
            alert("Driver added successfully");
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