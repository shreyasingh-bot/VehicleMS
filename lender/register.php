<?php
        $connection = mysqli_connect("sql102.infinityfree.com","if0_41708461","adgjl85278v","if0_41708461_vehiclems");
     

    $query_var= "insert into lender values (null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[address]','$_POST[mobile]')";
    $query_run= mysqli_query($connection,$query_var);
?>
<script type="text/javascript">
    alert("Registration Successful, You can now login")
    window.location.href="login.php";
</script>