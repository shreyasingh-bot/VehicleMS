<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
	$query = "delete from vehi where cid = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Deleted successfully...");
	window.location.href = "manage_veh.php";
</script>
	