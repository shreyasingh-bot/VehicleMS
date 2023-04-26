<?php
    session_start();
    $connection= mysqli_connect("localhost","root","");
    $db= mysqli_select_db($connection,"vehicle");
    $query="update lender set name='$_POST[name]', email='$_POST[email]', address='$_POST[address]' , mobile='$_POST[mobile]' where unid='$_SESSION[unid]'";
    $query_run=mysqli_query($connection,$query);

?>
<script type="text/javascript">
    alert("Successfully Updated!")
    window.location.href="dashboard.php";
</script>

