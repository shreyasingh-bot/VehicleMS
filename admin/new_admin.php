<?php
        $connection = mysqli_connect("sql102.infinityfree.com","if0_41708461","adgjl85278v","if0_41708461_vehiclems");
     

    $query_var= "insert into admin values (null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mob]')";
    $query_run= mysqli_query($connection,$query_var);
?>
<script type="text/javascript">
    alert("Admin Added Successfully")
    window.location.href="dashboard.php";
</script>