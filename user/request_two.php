<?php
    require('common.php');
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
    $name="";
    $cid="";
    $vehno="";
    $lunid="";
    $price="";
	$query = "select * from vehi where cid = '$_GET[bn]'";
	$query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $name= $row['name'];
        $cid= $row['cid'];
        $vehno= $row['vehno'];
        $lunid= $row['lunid'];
        $price= $row['price'];
    }
?>
<!DOCTYPE html>
<html>
        <center><h2>Fill the form to make request</h2></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">

					<div class="form-group">
						<label for="days">For Days:</label>
						<select class="form-control" name="days">
							<option>-Select Number of Days-</option>
							<option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
						</select>
                    </div>

					<div class="form-group">
						<label for="date">Date of Pickup:</label>
						<input type="date" name="pdate" class="form-control" required>
					</div>

                    <div class="form-group">
						<label for="pick">Pick Up Location:</label>
						<input type="text" name="pick" class="form-control" required>
					</div>

                    The rent for "<?php echo ($name)?>" is <?php echo ($price)?> per day <br>
                    20% should be paid as booking amount<br><br>
                    Scan the QR code to make payment

                    <div>
                    <img src="qr.jpg" height="50%" width="30%">
                    </div>

                    <div class="form-group">
                        <label for="name">Enter Transaction ID *</label>
                        <input type="text" name="tid" class="form-control" required>
                    </div>
                    <button type="submit" name="request" class="btn btn-success">Send Request</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
    </body>
</html>

<?php
	if(isset($_POST['request']))
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"vehicle");
		$query = "insert into request values(null,'$_SESSION[unid]','$_SESSION[name]','$lunid','$cid','$name','$vehno','$_POST[days]','$_POST[pdate]','$_POST[pick]','$_POST[tid]',CURRENT_TIMESTAMP)";
		$query_run = mysqli_query($connection,$query);
        ?>
        <script>
            alert("Request made Successfully")
            window.location="dashboard.php";
        </script>
        <?php
	}
?>