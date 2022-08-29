<?php   
 include '../auth.php'; 



if($_SESSION['role']!='admin'){
    header("Location: ../user/index2.php");
    
}


 
 $query = "select * from user";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Delete Data From Database in PHP</title>  
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
      background-color: #34495e;  
      position: relative;  
      font-family: 'verdana',sans-serif;  

 }  

.goback{
     margin-left: 45rem;
}


 header{  
      width: 100%;  
      height: 80px;  
      background-color: #2c3e50;  
 }  
 table{  
      width: 75%;  
      position: absolute;  
      top: 50%;  
      left: 50%;  
      transform: translate(-50%,-50%);  
 }  
 .heading{  
      background-color: #FFFF;  
 }  
 .heading th{  
      padding: 10px 0;  
 }  
 .data{  
      text-align: center;  
      color: #FFFF;  
 }  
 .data td{  
      padding: 15px 0;  
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
 <header><title>Deactive Account</title></header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
            
           <th>ID</th>  
           <th>Username</th>  
           <th>Email</th>  
           <th>Password</th>  
           <th>Phone</th>  
           <th>Gender</th>  
           <th>Occupation</th>  
           <th>Action</th> 
            
      </tr>  
      <?php   
       
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                           
                               <td>".$result['id']."</td>  
                               <td>".$result['username']."</td>  
                               <td>".$result['email']."</td>  
                               <td>".$result['password']."</td> 
                              
                               <td>".$result['phone']."</td>  
                               <td>".$result['gender']."</td> 
                               <td>".$result['occupation']."</td>  
                               <td><a href='delete.php?email=".$result['email']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 <div class="goback">
<a class="btn btn-success" style="text-decoration:none;border:solid black 2px; color:white; " href="./index2.php">GO BACK</a>
</div>

 <?php   
     if(isset($_GET['stat'])){
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
      $query = "DELETE FROM `user` WHERE email = '$email'";  
      $run = mysqli_query($conn,$query);  
      if ($run) { 
           
        header("Location: ./delete.php?stat=deleted");
        
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 </body>  
 </html>  