<?php
    require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>
        <center><h1 style="margin-top:2px">Active Service List</h1><br></center>
        <div class="row">
        
			<div class="col-md-1"></div>
			<div class="col-md-10 col-sm-12">
				<table class="table table-bordered table-primary">
					<thead class="table-dark">
						<tr>
                            <th>Request ID</th>
                            <th>Lender's ID</th>
							<th>User ID</th>
							<th>User Name</th>
							<th>Vehicle ID</th>
							<th>Name</th>
							<th>Number</th>
							<th>Days</th>
                            <th>Date</th>
                            <th>Pick</th>
                            
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"vehicle");
                        $query = "select * from approve";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['rqtid'];?></td>
                                <td><?php echo $row['lunid'];?></td>
								<td><?php echo $row['unid'];?></td>
								<td><?php echo $row['uname'];?></td>
                                <td><?php echo $row['cid'];?></td>
								<td><?php echo $row['vname'];?></td>
								<td><?php echo $row['vnum'];?></td>
                                <td><?php echo $row['days'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['pick'];?></td>
								
							</tr>
							<?php
						}
					?>
				</table>
			</div>
		</div>
    </body>
</html>