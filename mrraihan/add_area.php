
<?php
    session_start();
    if(!isset($_SESSION['role'])){
        header("/login.php");
    }
    if($_SESSION['role']!="admin"){
        echo "<script>top.window.location = './user/index2.php?error=Access denied'</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area Info</title>
  <link rel="shortcut icon" href="./images/area.jpg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <h1>Add Area </h1><hr><br><br>
        <form action="op_area.php" methon="post">
        
            <input type="text" class="form-control" placeholder="Area Name" name="aname"><br>
            <input type="text" class="form-control" placeholder="Postal Code" name="pcode"><br>
            <input type="text" class="form-control" placeholder="Driver ID" name="did"><br>
            
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
        <button style="margin-left:50rem ;" class="btn btn-success" name="back" ><a style="text-decoration:none ; color:white;" href="./user/index2.php">Back</a> </button>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

