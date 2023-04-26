<?php
    require('function.php');
    require('common.php');
?>
<html>
    <body>
        <div class="row" style="height:250px">
            <div class="container">
            
                <div class="cls1" id="id2"><br>From short road trips to quick in-city drives for groceries, meeting family, doctor, we have the cheapest rental for all your needs!</div>
                <div class="cls1" id="id3"><br>start, 0 Security Deposit, 0 Toll Charges, and 24/7 Roadside Assistance. Car rent per KM starts as low as Rs. 49/hour. </div>
                <div class="cls1" id="id4"><br> from the host location.<br> You can drive unlimited KMs, with 100% Free Cancellation up to 6 hours before the trip</div>
                <div class="cls1" id="id5"><br>The cars listed on our platform come with all-India permits that include vehicle insurance.<br>It is extremely easy to pick up the car </div>
                <div class="cls1" id="id7"><br>We cover you under all the circumstances to ensure the best journey!!  <br>You can experience the convenience of online booking.</div>
                <div class="cls1" id="id8"><br>luxury cars for surprises - we’ve got it all!<br> WE LOVE GIVING BEST EXPERIENCES. Just relax and drive!</div>

                <div class="cls1" id="id6">
                    <center><b><u>About Us</u></b></center><br>Largest car sharing marketplace.With no hidden charges. Sedans for short distances, SUVs for tough terrains,
                </div>
            </div>
        </div>
        <br>
        <hr style="height:2px; background-color:gray">
        <div class="row" style="margin-top:30px;margin-left:12px">
                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Vehicle:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Add Vehicle 
                            </p>
                                <a href="add_vehi.php" class="btn btn-success">Click to Add</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Active Vehicle:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Number of total Vehicle: <?php echo(get_veh_count()); ?> 
                            </p>
                                <a href="view_vehi.php" class="btn btn-primary">View Vehicle</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Manage Vehicle</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Delete/Edit Vehicle
                            </p>
                                <a href="manage_veh.php" class="btn btn-warning">Click to Manage</a>
                        </div> 
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Active Request</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Total Active Request: <?php echo(get_request_count()); ?> 
                            </p>
                                <a href="request_list.php" class="btn btn-secondary">View Request</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Approved Request:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Active Service:  <?php echo(get_approve_count()); ?>
                            </p>
                                <a href="active_service.php" class="btn btn-info">View List</a>
                        </div>
                    </div>
                    </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Raise Issue:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Raise an issue to admin  
                            </p>
                                <a href="issue.php" class="btn btn-danger">Click</a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        


    </body>
</html>