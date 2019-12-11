<?php
session_start();
	include 'db.php';
	if(isset($_POST['username']) && isset($_POST['password']))  
    {
 	$username=$_POST['username'];
 	$password=$_POST['password'];

 	$query	= "SELECT * FROM user WHERE username = '$username'";
 	$res = mysqli_query($con, $query);
    	if($res)
    	{
    		$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
    		$dbpass = $row['password'];
    		if($dbpass == $password)
    		{
    			$_SESSION['id']=$row['id'];
    			$_SESSION['username']=$row['username'];
    			header('Location:profile.php');
    		}
    		else
    		{
    			echo 'invalid credentials';
    		}
    	}
 	
    }
    else
    {
    	echo 'enter valid details';
    }	
?>