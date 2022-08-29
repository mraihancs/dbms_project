<?php   
 include '../auth.php'; 



if($_SESSION['role']!='admin'){
    header("Location: ../user/index2.php");
    
}


 
 $query = "select * from complaint";  
 $run = mysqli_query($conn,$query);  
 ?>  




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment View</title>
    <link rel="shortcut icon" href="../images/payment.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
      
      
      *{  
      padding: 0;  
      margin: 0;  
      box-sizing: border-box;  
 }  
 body{  
      width: 100%;  
      height: 100vh;  
      background-color: azure;  
      position: relative;  
      font-family: 'verdana',sans-serif;  

 }  

.goback{
     margin-left: 45rem;
}


 header{  
      width: 100%;  
      height: 80px;  
      background-color: white;  
 }  
 table{  
      width: 75%;  
      position: absolute;  
      top: 50%;  
      left: 50%;  
      transform: translate(-50%,-50%);  
 }  
 .heading{  
      background-color: black;  
 }  
 .heading th{  
    text-align: center;
    padding: 15px 0px;
      color: white; 
 }  
 .data{  
      text-align: center;  
      color: black;  
 }  
 .data td{  
     
      padding: 15px 0; 
      border: 1px solid black; 
 }  
 #btn{  
      text-decoration: none;  
      color: #FFF;  
      background-color: #e74c3c;  
      padding: 5px 20px;  
      border-radius: 3px;  

 }  
 #btn:hover{  
      background-color: #c0392b;  
 }  
</style>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
            
           <th>SI</th>  
           <th>First Name</th>  
           <th>Last Name</th>  
           <th>Email</th>  
           <th>Country</th>  
           <th>Complaint</th>
           <th>Action</th> 
           <th>Action</th> 
            
      </tr>  
      <?php   
       
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                           
                               <td>".$result['s_no']."</td>  
                               <td>".$result['first_name']."</td>  
                               <td>".$result['last_name']."</td> 
                               <td>".$result['email']."</td>  
                               <td>".$result['country']."</td> 
                              
                               <td>".$result['complaint']."</td>  
                               
                               <td><a href='mailto:".$result['email']."' id='btn'>Reply</a></td>  
                               <td><a href='./pay_view.php?email=".$result['email']."' id='btn'>Delete</a></td> 
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 <div class="goback">
 <button style="margin-top:2rem;" class="btn btn-success" name="back" ><a style="text-decoration:none ; color:white;" href="./index2.php">Back</a> </button>
</div>

<?php   
     if(isset($_GET['ct'])){
          echo "
          <script>
          alert('Data deleted Successfully');
          </script>";
     }
 
 $server = "localhost";
    $username = "root";
    $password = "";
    $database = "tms";
    
    $conn = mysqli_connect($server, $username, $password, $database);
 
 if (isset($_GET['email'])) {  
      $email = $_GET['email'];  
      $query = "DELETE FROM `complaint` WHERE email = '$email'";  
      $run = mysqli_query($conn,$query);  
      if ($run) { 
           
        header("Location: ./pay_view.php?ct=delete");
        
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    
</body>
</html>