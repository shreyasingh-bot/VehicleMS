<?php
    require('common.php');
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
    $unid ="";
	$name = "";
	$email = "";
	$address = "";
	$mobile = "";
	$query = "select * from user";
?>
<!DOCTYPE html>
<html>
    <body>
        <center><h2 style="margin-top:2px">Active Users Detail</h2><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table table-striped" width="900px" style="text-align: center">
						<tr>
                            <th>Unique ID</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
                            <th>Address</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
                            $unid= $row['unid'];
							$name = $row['name'];
							$email = $row['email'];
							$mobile = $row['mobile'];
                            $address = $row['address'];
					?>
						<tr>
                            <td><?php echo $unid;?></td>
							<td><?php echo $name;?></td>
							<td><?php echo $email;?></td>
							<td><?php echo $mobile;?></td>
                            <td><?php echo $address;?></td>
						</tr>
					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
    </body>
</html>