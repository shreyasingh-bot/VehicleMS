<?php
$connection = mysqli_connect("sql102.infinityfree.com","if0_41708461","adgjl85278v","if0_41708461_vehiclems");
  
$sql="DELETE FROM chat";
$query_run = mysqli_query($connection,$sql);
?>

<script>
    alert("Chat ended successfully");
    window.location="active_service.php";
</script>