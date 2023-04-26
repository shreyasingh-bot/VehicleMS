<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"vehicle"); ;

if($_POST)
{
	$name=$_SESSION['name'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO chat VALUES (null,'$name','$msg')";

	$query = mysqli_query($connection,$sql);
	if($query)
	{
		header('Location: chatpage.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>