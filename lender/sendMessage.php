<?php
session_start();
$connection = mysqli_connect("sql102.infinityfree.com","if0_41708461","adgjl85278v","if0_41708461_vehiclems");
     

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