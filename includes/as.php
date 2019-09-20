<?php
   $connection_mysql = mysqli_connect("localhost","kapchel1_root","AllowMe!01","kapchel1_kapchelach");
   
   if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT Lastname FROM Persons";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("Result set has %d rows.\n",$rowcount);
      mysqli_free_result($result);
   }
   mysqli_close($connection_mysql);
?>
