<?php
    require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>
        <center><h1 style="margin-top:2px">Manage Vehicle</h1><br></center>
        <div class="row">
        
			<div class="col-md-1"></div>
			<div class="col-md-9">
				<table class="table table-bordered table-hover table-primary">
					<thead class="table-secondary">
						<tr>
                            <th>ID</th>
                            <th>Vehicle No.</th>
							<th>Name</th>
							<th>Type</th>
							<th>Price</th>
							<th>Edit</th>
                            <th>Delete</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"vehicle");
                        $query = "select * from vehi where lunid= '$_SESSION[unid]'";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['cid'];?></td>
								<td><?php echo $row['vehno'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['type'];?></td>
								<td><?php echo $row['price'];?></td>
                                <td><button class="btn" name=""><a href="edit_veh.php?bn=<?php echo $row['cid'];?>">Edit</a></button>
								<td><button class="btn" name=""><a href="delete_veh.php?bn=<?php echo $row['cid'];?>">Delete</a></button>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
		</div>
    </body>
</html>