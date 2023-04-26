<?php 

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"vehicle");
$query_v= "delete from request where rqtid = $_GET[bn]";
$query_r = mysqli_query($connection,$query_v);

?>

<script type="text/javascript">
alert("Request Deleted");
window.location.href = "dashboard.php";
</script>
