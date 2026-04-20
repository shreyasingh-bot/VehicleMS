<?php
        $connection = mysqli_connect("sql102.infinityfree.com","if0_41708461","adgjl85278v","if0_41708461_vehiclems");
     

    $query_var= "insert into note_lender values (null,'$_POST[note]')";
    $query_run= mysqli_query($connection,$query_var);
    ?>
<script type="text/javascript">
    alert("Note Added Successfully")
    window.location.href="dashboard.php";
</script>