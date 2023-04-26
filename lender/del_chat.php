<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"vehicle"); 
$sql="DELETE FROM chat";
$query_run = mysqli_query($connection,$sql);
?>

<script>
    alert("Chat ended successfully");
    window.location="active_service.php";
</script>