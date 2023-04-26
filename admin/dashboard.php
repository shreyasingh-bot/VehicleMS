<?php
    require('common.php');
    require('function.php');
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
<hr style="height:2px;background-color:gray">

        <div class="row" style="margin-top:30px;margin-left:12px">
                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Active Users:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Total active users: <?php echo(get_user_count());?>
                            </p>
                                <a href="view_user.php" class="btn btn-success">View Active Users</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard" >
                        <div class="card-header" style="color:white">Active Lenders:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Total active lenders: <?php echo(get_lender_count());?>
                            </p>
                                <a href="view_len.php" class="btn btn-primary">View Active Lenders</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Active Admins:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Total active admins: <?php echo(get_admin_count());?> 
                            </p>
                                <a href="view_admin.php" class="btn btn-warning">View Active Admins</a>
                        </div> 
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Vehicle List:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Available Vehicle: <?php echo(get_veh_count());?>
                            </p>
                                <a href="veh_list.php" class="btn btn-info">List of vehicle</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Active Service:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Ongoing Services: <?php echo(get_approve_count());?> 
                            </p>
                                <a href="approved.php" class="btn btn-warning">View Active Service</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Note for Lender:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Active Note:  <?php echo(get_notelen_count());?> 
                            </p>
                                <a href="note_len.php" class="btn btn-danger">View Note</a>
                        </div>
                    </div>
                    </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Note for User:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Active Note:  <?php echo(get_noteuser_count());?>
                            </p>
                                <a href="note_user.php" class="btn btn-dark">View Note</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sd-6">
                    <div class="card bg-dark clscard">
                        <div class="card-header" style="color:white">Feedback:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Total feedbacks:  <?php echo(get_feed_count());?>
                            </p>
                                <a href="feedback.php" class="btn btn-success">View Feedbacks</a>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        


    </body>
</html>