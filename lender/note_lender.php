<?php
    require('common.php');
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
    $note="";
	$query = "select * from note_lender";
	$query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $note= $row['note'];
    }
?>
<!DOCTYPE html>
<html>
    <body>
        <div class="row">
            <div class="container" style="margin-top:20px">
                <div id="note1">

                <table class="table table-transparent table-hover">
					<thead>
						<tr>
							<td style="font-size:40px"><b>Notification</b></td>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"vehicle");
						$query = "select * from note_lender";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['note'];?></td>
							</tr>
							<?php
						}
					?>
				</table>
                </div>
                <br><br><br><br>
            </div>
        </div>
    </body>
</html>