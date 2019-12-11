<?php
session_start();
if(!isset($_SESSION['id']) && !isset($_SESSION['username']))
{
	header("Location: index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
</head>
<body>
     <h2>HELLO.......<?php echo $_SESSION['username'];?></h2>
     <a href="logout.php">LOGOUT</a>
</body>
</html>

