<?php
    session_start();
    $connection= mysqli_connect("localhost","root","");
    $db= mysqli_select_db($connection,"vehicle");
    $query="update user set name='$_POST[name]', email='$_POST[email]', mobile='$_POST[mobile]', address='$_POST[address]' where unid='$_SESSION[unid]'";
    $query_run=mysqli_query($connection,$query);

?>

<script type="text/javascript">
    alert("Successfully Updated!")
    window.location.href="dashboard.php";
</script>