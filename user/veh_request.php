<?php
    require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>
        <center><h2>Request Vehicle<br><h4 style="color:brown">Avaliable Vehicle List</h4></h2><br></center>

        <div class="row">
        
        <div class="col-md-2"></div>
        <div class="col-md-9">
            <table class="table table-bordered table-hover table-primary">
                <thead class="table-secondary">
                    <tr>
                        <th>Vehicle ID</th>
                        <th>Vehicle No.</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Address</th>
                        <th>Request</th>
                    </tr>
                </thead>
                <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"vehicle");
                    $query = "select * from vehi";
                    $query_run = mysqli_query($connection,$query);
                    while ($row = mysqli_fetch_assoc($query_run)){
                        ?>
                        <tr>
                            <td><?php echo $row['cid'];?></td>
                            <td><?php echo $row['vehno'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['type'];?></td>
                            <td><?php echo $row['price'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><button class="btn" name=""><a href="request_two.php?bn=<?php echo $row['cid'];?>">Make Request</a></button>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
    </body>
</html>