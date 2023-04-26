<?php
    $connection= mysqli_connect("localhost","root","");
    $db= mysqli_select_db($connection,"vehicle");

    $query_var= "insert into admin values (null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mob]')";
    $query_run= mysqli_query($connection,$query_var);
?>
<script type="text/javascript">
    alert("Admin Added Successfully")
    window.location.href="dashboard.php";
</script>