<?php
    session_start();
        $connection = mysqli_connect("sql102.infinityfree.com","if0_41708461","adgjl85278v","if0_41708461_vehiclems");
     

    $query_var= "insert into vehi values (null,'$_SESSION[unid]','$_SESSION[name]','$_POST[name]','$_POST[type]','$_POST[vehno]','$_POST[des]','$_POST[price]','$_POST[address]')";
    $query_run= mysqli_query($connection,$query_var);
?>
<script type="text/javascript">
    alert("Vehicle Added Successfully")
    window.location.href="dashboard.php";
</script>