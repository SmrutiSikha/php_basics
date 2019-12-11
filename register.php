<?php
  include 'db.php';
  

 if(isset($_POST['username']) && isset($_POST['password']))  
 {
 	$username=$_POST['username'];
 	$password=$_POST['password'];
 	$r_password=$_POST['r_password'];
 	$dob=$_POST['dob'];
 	$email=$_POST['email'];
    if($password == $r_password)
    {
    	$query = "INSERT INTO user (username,password,dob,email) VALUES ('$username','$password','$dob','$email')";
    	$res = mysqli_query($con, $query);
    	if($res)
    	{
    		header('Location:index.html');
    	}

    else
    {
    	echo "enter proper credentials";
    }
    }
 }
?>