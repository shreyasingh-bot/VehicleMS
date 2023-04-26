<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title> VRS </title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--<link rel="stylesheet" type="text/css" href="style.css">-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <img src="../car.png" width="30px" height="30px" class="img-thumbnail">
                    <a class="navbar-brand" href="../index.php" style="font-family:Verdana, Geneva, Tahoma, sans-serif">Vehicle Rental System</a>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="../info/aboutus.php">About Us |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../info/terms.php">Our Terms |</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="../info/contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-2" id="sideinfo">
                <b><center>About Us</center></b>
                <p>
                Largest car sharing marketplace.With no hidden charges. Sedans for short distances, SUVs for tough terrains,luxury cars for surprises - we’ve got it all! .WE LOVE GIVING BEST EXPERIENCES. Just relax and drive!We cover you under all the circumstances to ensure the best journey!! You can experience the convenience of online booking.The cars listed on our platform come with all-India permits that include vehicle insurance.from the host location. You can drive unlimited KMs, with 100% Free Cancellation up to 6 hours before the trip start, 0 Security Deposit, 0 Toll Charges, and 24/7 Roadside Assistance. Car rent per KM starts as low as Rs. 49/hour.From short road trips to quick in-city drives for groceries, meeting family, doctor, we have the cheapest rental for all your needs!
                </p>
            </div>

            <div class="col-md-2"></div>
            <div class="col-md-6">
                <h2>User Registration Form</h2>
          
                <form action="register.php" method="post">
                
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email ID *</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Phone Number *</label>
                    <input type="text" name="mobile" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Address *</label>
                    <input type="textarea" name="address" class="form-control" required>
                </div>

                <button class="btn btn-primary" type="submit">Register </button>
                |
                <a href="login.php">Already Registerd? Login </a>
            </form>

            </div>
        </div>
    </body>
</html>