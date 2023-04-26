<?php
    require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>

        <center><h1 style="margin-top:2px">Feedback</h1><br></center>
        <div class="row">
        
			<div class="col-md-2"></div>
			<div class="col-md-7 col-sm-12">
				<table class="table table-bordered table-primary">
					<thead class="table-dark">
						<tr>
                            <th>Serial Number</th>
                            <th>Feedback</th>
                            <th>Action</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"vehicle");
                        $query = "select * from ssue";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['Srno'];?></td>
                                
								<td><?php echo $row['issue'];?></td>
                                <td class="table-danger"><button class="btn" name=""><a href="delete_feed.php?bn=<?php echo $row['Srno'];?>">Delete</a></button>

							</tr>
							<?php
						}
					?>
				</table>
			</div>
		</div>

    </body>
</html>