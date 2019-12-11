<?php
  $host="localhost";
  $user="root";
  $pwd="";
  $db="cms";

  $con = mysqli_connect($host, $user, $pwd, $db);
  if(!$con)
  	echo "error connecting to the database";
?>