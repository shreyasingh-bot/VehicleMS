<?php
	$connection = mysqli_connect("sql102.infinityfree.com","if0_41708461","adgjl85278v","if0_41708461_vehiclems");
	$db =   ($connection,"vehicle");
	$query = "delete from lender where unid = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Lender Deleted successfully...");
	window.location.href = "dashboard.php";
</script>