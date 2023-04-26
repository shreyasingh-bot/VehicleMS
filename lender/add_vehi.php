<?php
    require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>

        <center><h1>Add New Vehicle</h1><br></center>

<div class="row">
    <div class="col-md-3 col-sm-12"></div>
    <div class="col-md-5 col-sm-12">
           <form action="new_vehi.php" id=prof-form method="post">
                
                <div class="form-group">
                    <label>Vehicle Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control" name="type">
                </div>

                <div class="form-group">
                    <label>Number</label>
                    <input type="text
                    " class="form-control" name="vehno">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="des">
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price">
                </div>
                
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                
                <button class="btn btn-success" type="submit" name="update">Add Vehicle</button>
           </form>
    </div>
    </div>
    </body>
</html>