<?php
    require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>
        <center><h2 style="margin-top:2px">Active Service List</h2><br></center>
        <div class="row">
        
			<div class="col-md-1"></div>
			<div class="col-md-10 col-sm-12">
				<table class="table table-bordered table-hover table-primary">
					<thead class="table-secondary">
						<tr>
                            <th>Request ID</th>
                            <th>UserName</th>
							<th>Vehicle ID</th>
							<th>Name</th>
							<th>Number</th>
							<th>Days</th>
                            <th>Date</th>
                            <th>Pick</th>
							<th>User Message</th>
                            <th>Action</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"vehicle");
                        $query = "select * from approve where lunid= '$_SESSION[unid]'";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['rqtid'];?></td>
								<td><?php echo $row['uname'];?></td>
                                <td><?php echo $row['cid'];?></td>
								<td><?php echo $row['vname'];?></td>
								<td><?php echo $row['vnum'];?></td>
                                <td><?php echo $row['days'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['pick'];?></td>
								<td class="table-success"><button class="btn" name=""><a style="color:darkgreen" href="chatpage.php?bn=<?php echo $row['rqtid'];?>"><b>View Message</b></a></button>
                                <td class="table-success"><button class="btn" name=""><a style="color:darkgreen" href="delete_service.php?bn=<?php echo $row['rqtid'];?>"><b>Mark Complete</b></a></button>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
		</div>
    </body>
</html>