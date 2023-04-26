<?php
    require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>
        <h1><center>Restrict Lender</center></h1><br>

        <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-danger table-hover">
					<thead>
						<tr>
							<th>Unique ID</th>
							<th>Name</th>
                            <th>Email ID</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Action</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"vehicle");
						$query = "select * from lender";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['unid'];?></td>
								<td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['address'];?></td>
								<td><button class="btn" name=""><a href="delete_lender.php?bn=<?php echo $row['unid'];?>">Restrict</a></button>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
        </div>
    </body>
</html>