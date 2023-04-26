<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
	$query = "delete from admin where unid = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Admin Deleted successfully...");
	window.location.href = "dashboard.php";
</script>
	