<?php
   
   $dbhost = 'localhost';
   $dbuser = 'rooot';
   $dbpass = 'rooot';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "stmg");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   //echo 'Connected successfully';
?>