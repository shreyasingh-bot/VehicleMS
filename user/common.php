<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title> VRS </title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        #subspt{
            font-size: 14px;
            text-shadow: 3px 4px 8px  gold;
   
        }
    </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <img src="../car.png" width="30px" height="30px" class="img-thumbnail">
                        <a class="navbar-brand" href="dashboard.php" style="font-family:Verdana, Geneva, Tahoma, sans-serif">Vehicle Rental System <i id="subspt">  Chat with Lender directly, no middleman!!</i></a>
                </div>
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item" style="color:gray">
                        Welcome User:
                            <?php
                                echo $_SESSION['name'];
                                ?>
                    </li>
                    <li class="nav-item" style="color:gray">
                    &nbsp;|&nbsp;  ID:
                            <?php
                                echo $_SESSION['unid'];
                            ?>
                            &nbsp;|&nbsp;
                    </li>
                    <li class="nav-item">
                        <a href="../admin/logout.php"  style="color:indianred">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <div class="topnav">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">
                My Profile
                </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="view_profile.php">View Profile</a>
                    <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                    <a class="dropdown-item" href="change_pwd.php">Change Password</a>
            </div>
            |
            <a href="note_user.php" style="color:goldenrod"><b>Notification</b></a>
            &nbsp; &nbsp; &nbsp; &nbsp;
        </div>
        </div>
