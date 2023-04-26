<?php
    require('common.php');
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
    $lunid ="";
	$lname = "";
    $cid="";
	$name = "";
    $vehno="";
    $type="";
    $desp="";
    $price="";
	$address = "";
	$query = "select * from vehi";
?>
<!DOCTYPE html>
<html>
    <body>
        <center><h2 style="margin-top:2px">Vehicle Detail</h2><br></center>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<form>
					<table class="table table-warning table-bordered" width="900px" style="text-align: center">
						<thead class="table-dark">
                            <th>Unique ID</th>
							<th>Name</th>
							<th>Vehicle Name</th>
                            <th>Vehicle Unique ID</th>
							<th>Number</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Address</th>
						</thead>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
                            $lunid= $row['lunid'];
							$lname = $row['lname'];
							$name = $row['name'];
                            $cid = $row['cid'];
							$vehno = $row['vehno'];
                            $type = $row['type'];
                            $desp = $row['desp'];
                            $price = $row['price'];
                            $address = $row['address'];
					?>
						<tr>
                            <td><?php echo $lunid;?></td>
							<td><?php echo $lname;?></td>
							<td><?php echo $name;?></td>
                            <td><?php echo $cid;?></td>
							<td><?php echo $vehno;?></td>
                            <td><?php echo $type;?></td>
                            <td><?php echo $desp;?></td>
                            <td><?php echo $price;?></td>
                            <td><?php echo $address;?></td>
						</tr>
					<?php
						}
					?>	
				</table>
				</form>
			</div>
		</div>
    </body>
</html>