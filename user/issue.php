<?php
    require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>
        <h2><center>Raise Issue/ Send Feedback</center></h2><br>
            <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                   <form action="" method="post">
                        <div class="form-group">
                            <label>Issue/Feedback:</label>
                            <input type="text" class="form-control" name="issue" style="height:300px;width:600px">
                        </div>
                        <button class="btn btn-primary" type="submit" name="update">Submit</button>
                   </form>
                   </div>
                   </div>
    </body>
    <?php
    if(isset($_POST['update'])){
    $connection= mysqli_connect("localhost","root","");
    $db= mysqli_select_db($connection,"vehicle");
    $query_var= "insert into ssue values (null,'$_POST[issue]')";
    $query_run= mysqli_query($connection,$query_var);
    
    ?>
    <script type="text/javascript">
    alert("Sent Successfully")
    window.location.href="dashboard.php";
    </script>
    <?php
    }
    ?>
    
    
    
</html>
