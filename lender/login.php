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
        <div class="col-lg-3"></div>
            <div class="col-lg-5 col-sm-12">
            <br><h3>Lender Login</h3>
            <form action="" method="post">
                
                <div class="form-group">
                    <label for="email">Email ID *</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="button" class="btn btn-info" onclick="showing(this)">Show Password</button>
                <button class="btn btn-primary" type="submit" name="login">Login</button>
                |
                <a href="index.php">Not Registerd Yet?</a>
            </form>

            
            <?php 
                session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"vehicle");
					$query = "select * from lender where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['unid'] =  $row['unid'];
								header("Location: dashboard.php");
							}
							else{
								?>
								<script>
                                    alert("wrong details, Try again");
                                    window.location="login.php";
                                </script>
								<?php
							}
						}
					}
				}
			?>

            </div>
        </div>
        </div>

        <div class="main">
            <div class="back">
                <img src="../bud.png"  height="100%" width="100%">  
                <div class="car2">
                    <img src="../car2.png"  height="100%" width="100%">
                </div>
                <div class="car">
                    <img src="../car.png"  height="100%" width="100%">
                </div>
            </div>
        </div>
    </body>

    <script type="text/javascript">
        var pass= document.getElementById('password');
        function showing(elem){
            var type=pass.getAttribute('type');
            if(type=="password"){
                pass.setAttribute("type","text");
                elem.innerText = "Hide Password";
            }
            else{
                pass.setAttribute("type","password");
                elem.innerText = "Show Password";
            }
       
        }   
</script>
</html>