<?php
	$connection = mysqli_connect("sql102.infinityfree.com","if0_41708461","adgjl85278","if0_41708461_vehiclems");
	    
	$query = "delete from vehi where cid = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Deleted successfully...");
	window.location.href = "manage_veh.php";
</script>
	