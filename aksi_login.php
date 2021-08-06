<?php

session_start();

$username=$_POST["username"];
$password=$_POST["password"];

if($username=="Admin" AND $password=="Admin12#")
{
	$_SESSION["username"]=$username;
	header("location:index.php");
}else{
	header("location:login.php?login_error");
}
?>