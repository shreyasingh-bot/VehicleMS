<?php
     require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>
        <center><h1 style="margin-top:2px">Vehicle Request</h1><br></center>
        <div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 col-sm-12" style="margin-left:15px">
				<table class="table table-bordered table-hover table-primary">
					<thead class="table-secondary">
						<tr>
                            <th>User ID</th>
							<th>User Name</th>
                            <th>Name</th>
                            <th>Number</th>
							<th>For Days</th>
                            <th>Date</th>
                            <th>Pick Point</th>
							<th>Transation ID</th>
							<th>Accept</th>
                            <th>Reject</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"vehicle");
                        $query = "select * from request where lunid= '$_SESSION[unid]'";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								
								<td><?php echo $row['unid'];?></td>
								<td><?php echo $row['uname'];?></td>
								
								<td><?php echo $row['vname'];?></td>
                                <td><?php echo $row['vnum'];?></td>
                                <td><?php echo $row['days'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['pick'];?></td>
								<td><?php echo $row['tid'];?></td>
                                <td class="table-success"><button class="btn" name=""><a href="approve.php?bn=<?php echo $row['rqtid'];?>">Approve</a></button>
								<td class="table-danger"><button class="btn" name=""><a href="disapprove.php?bn=<?php echo $row['rqtid'];?>">Disapprove</a></button>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
		</div>
    </body>
</html>