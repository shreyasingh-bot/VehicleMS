<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
	$query = "delete from note_lender where id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Note Deleted successfully...");
	window.location.href = "dashboard.php";
</script>