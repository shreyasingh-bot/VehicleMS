<?php 

$connection = mysqli_connect("sql102.infinityfree.com","if0_41708461","adgjl85278","if0_41708461_vehiclems");
    
$query_v= "delete from request where rqtid = $_GET[bn]";
$query_r = mysqli_query($connection,$query_v);

?>

<script type="text/javascript">
alert("Request Deleted");
window.location.href = "dashboard.php";
</script>
