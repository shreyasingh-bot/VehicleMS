<?php
    session_start();
        $connection = mysqli_connect("sql102.infinityfree.com","if0_41708461","adgjl85278v","if0_41708461_vehiclems");
     
    $query="update admin set name='$_POST[name]', email='$_POST[email]', mob='$_POST[mobile]' where unid = '$_SESSION[unid]'";
    $query_run=mysqli_query($connection,$query);

?>

<script type="text/javascript">
    alert("Updated Successfully")
    window.location.href="dashboard.php";
</script>