<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username']))
{
	unset($_SESSION['id']);
	unset($_SESSION['username']);
	header('Location:index.html');
}

?>
