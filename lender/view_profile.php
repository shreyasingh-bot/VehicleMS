<?php
    require('common.php');
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
    $name="";
    $email="";
    $mobno="";
    $unid="";
    $add="";
	$query = "select * from lender where unid = '$_SESSION[unid]'";
	$query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $unid= $row['unid'];
        $name= $row['name'];
        $email= $row['email'];
        $mobno= $row['mobile'];
        $add= $row['address'];
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <h2><center>Lender Details</center></h2>
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
                <form>
                        <div class="form-group">
                            <label>Lender ID:</label>
                            <input type="text" class="form-control" value="<?php echo $unid;?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" value="<?php echo $name;?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" class="form-control" value="<?php echo $email;?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number:</label>
                            <input type="text" class="form-control" value="<?php echo $mobno;?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" class="form-control" value="<?php echo $add;?>" disabled>
                        </div>
                   </form>
        </div>
        </div>
    </body>
</html>