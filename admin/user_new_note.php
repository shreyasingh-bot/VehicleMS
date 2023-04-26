<?php
    $connection= mysqli_connect("localhost","root","");
    $db= mysqli_select_db($connection,"vehicle");

    $query_var= "insert into note_user values (null,'$_POST[note]')";
    $query_run= mysqli_query($connection,$query_var);
    ?>
<script type="text/javascript">
    alert("Note Added Successfully")
    window.location.href="dashboard.php";
</script>