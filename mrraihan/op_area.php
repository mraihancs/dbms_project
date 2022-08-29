<?php
      $name=$_GET['aname'];
      $code=$_GET['pcode'];
      $driver=$_GET['did'];
      
      include "./auth.php";

      $sql="INSERT INTO area(area_name,postal_code,d_id) VALUES ('$name', '$code', '$driver');";
      
      
      if (mysqli_query($conn, $sql)) {
        ?>
    <script>
      alert("Area added successfully");
    </script>
    <?php
 header("Location: ./add_area.php");
    } else {
        echo "Error: " . $sql. ":-" . mysqli_error($conn);
    }
   
?>
