<?php
    require('common.php');
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
    $name="";
    $email="";
    $mobno="";
    $unid="";
	$query = "select * from admin where unid = '$_SESSION[unid]'";
	$query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $name= $row['name'];
        $email= $row['email'];
        $mobno= $row['mob'];
        $unid= $row['unid'];
    }
?>
<!DOCTYPE html>
<html>
    <body>
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-5 col-sm-12">
                <h1><center>Edit Profile</center></h1>
                   <form action="profile_update.php" id=prof-form method="post">
                   <div class="form-group">
                            <label>Admin Id:</label>
                            <input type="text" class="form-control" value="<?php echo $unid;?>" name="unid" disabled>
                        </div>
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" value="<?php echo $name;?>" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" class="form-control" value="<?php echo $email;?>" name="email">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number:</label>
                            <input type="text" class="form-control" value="<?php echo $mobno;?>" name="mobile">
                        </div>
                        <button class="btn btn-success" type="submit" name="update">Update</button>
                   </form>
            </div>
            </div> 


    </body>
</html>