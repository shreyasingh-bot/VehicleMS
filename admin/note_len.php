<?php
    require('common.php');
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
    $unid ="";
	$note = "";
	$query = "select * from note_lender";
?>
<!DOCTYPE html>
<html>
    <body>
        <h1><center>Existing Note</center></h1><br>

        <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-dark table-hover">
					<thead>
						<tr>
							<th>Note ID</th>
							<th>Note</th>
                            <th>Action</th>
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
								<td><?php echo $row['id'];?></td>
								<td><?php echo $row['note'];?></td>
								<td><button class="btn" name=""><a href="delete_len_note.php?bn=<?php echo $row['id'];?>">Delete</a></button>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
            <hr style="height:2px; background-color:gray">
            <br>
        <center><h1>Add New Note</h1><br></center>

        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-5 col-sm-12">
                   <form action="len_new_note.php" method="post">
                        <div class="form-group">
                        <label>Note:</label>
                            <input type="text" class="form-control" name="note">
                        </div>
                        <button class="btn btn-success" type="submit" name="update">Add Note</button>
                   </form>
            </div>
            </div>
    </body>
</html>