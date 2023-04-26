<?php
	require('common.php');
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
	$lunid = "";
	$lname = "";
	$name = "";
    $cid ="";
	$vehno = "";
    $type = "";
    $des = "";
	$price = "";
    $address = "";
	$query = "select * from vehi where cid = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$lunid = $row['lunid'];
		$lname = $row['lname'];
		$name = $row['name'];
        $cid = $row['cid'];
        $vehno = $row['vehno'];
		$type = $row['type'];
        $des = $row['desp'];
		$price = $row['price'];
        $address = $row['address'];
	}
?>

<!DOCTYPE html>
<html>
    <body>
<center><h4>Edit Vehicle</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
					<label for="cid">Vehicle Unique ID:</label>
						<input type="text" name="cid" value="<?php echo $cid;?>" class="form-control" disabled>
					</div>
					<div class="form-group">
						<label for="name">Vehicle Name:</label>
						<input type="text" name="name" value="<?php echo $name;?>" class="form-control" required>
					</div>
                    
					<div class="form-group">
						<label for="vehno">Number:</label>
						<input type="text" name="vehno" value="<?php echo $vehno;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="type">Type:</label>
						<input type="text" name="type" value="<?php echo $type;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="desp">Description:</label>
						<input type="text" name="des" value="<?php echo $des;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mprice">Price:</label>
						<input type="text" name="price" value="<?php echo $price;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="address">Address:</label>
						<input type="text" name="address" value="<?php echo $address;?>" class="form-control" required>
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update Vehicle</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
<?php
	if(isset($_POST['update'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"vehicle");
		$query = "update vehi set  name = '$_POST[name]', vehno = '$_POST[vehno]', type= '$_POST[type]', desp = '$_POST[des]',price = '$_POST[price]',address = '$_POST[address]' where cid = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
    
        ?>
        <script type="text/javascript">
            alert("Vehicle updated");
            window.location.href = "manage_veh.php";
        </script>
        <?php
    }
		
?>
