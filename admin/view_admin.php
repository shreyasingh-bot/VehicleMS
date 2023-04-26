<?php
    require('common.php');
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
	$name = "";
	$email = "";
	$unid = "";
	$mobile = "";
	$query = "select * from admin";
?>
<!DOCTYPE html>
<html>
    <body>
        <center><h1>Admin Detail</h1><br></center>
        
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table table-striped table-info table-bordered table-hover" width="900px" style="text-align: center">
						<tr>
							<th>Admin ID</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							$unid = $row['unid'];
							$name = $row['name'];
							$mobile = $row['mob'];
                            $email = $row['email'];
                            
					?>
						<tr>
							<td><?php echo $unid;?></td>
							<td><?php echo $name;?></td><td>
                            <?php echo $mobile;?></td>
							<td><?php echo $email;?></td>
                            
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