<?php
    require('common.php');
?>
<html>
    <body>
        <center><h2 style="margin-top:2px">Approved Vehicle List</h2><br></center>
        <div class="row">
        
			<div class="col-md-1"></div>
			<div class="col-md-10 col-sm-12">
				<table class="table table-bordered table-hover table-primary">
					<thead class="table-secondary">
						<tr>
                            <th>Request ID</th>
							<th>Vehicle ID</th>
							<th>Name</th>
							<th>Number</th>
							<th>Days</th>
                            <th>Date</th>
                            <th>Pick</th>
                            <th>Date-Time</th>
							<th>Contact Lender</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"vehicle");
                        $query = "select * from request where unid= '$_SESSION[unid]'";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['rqtid'];?></td>
                                <td><?php echo $row['cid'];?></td>
								<td><?php echo $row['vname'];?></td>
								<td><?php echo $row['vnum'];?></td>
                                <td><?php echo $row['days'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['pick'];?></td>
                                <td><?php echo $row['time'];?></td>
								<td><button class="btn" name=""><a href="req_delete.php?bn=<?php echo $row['rqtid'];?>">Cancel Request</a></button>
								
							</tr>
							<?php
						}
					?>
				</table>
                <p>*Request can only be cancelled before 6 hours of pickup time<br>Beyond that cancellation charge will be applicable</p>
			</div>
		</div>
    </body>
</html>