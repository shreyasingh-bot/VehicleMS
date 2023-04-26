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
        <link rel="stylesheet" href="style1.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <img src="../car.png" width="30px" height="30px" class="img-thumbnail">
                        <a class="navbar-brand" href="dashboard.php" style="font-family:Verdana, Geneva, Tahoma, sans-serif">Vehicle Rental System</a>
                </div>
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item" style="color:gray">
                        Welcome Admin:
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
                        <a href="logout.php"  style="color:indianred">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
        <div class="container-fluid">
                <nav class="navbar navbar-light bg-info navbar-expand-lg sticky-top" style="margin-top: 3px">
                
                    <a class="navbar-brand" href="dashboard.php"><b>Dashboard</b></a>
                        <ul class="nav navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="view_profile.php">View Profile</a>
                                <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                                <a class="dropdown-item"  href="pwd_change.php">Change Password</a>
                            </div>
                        </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown">View</a>
                                    <div class="dropdown-menu">
                                        <a href="view_user.php" class="dropdown-item">View Users</a>
                                        <a href="view_len.php" class="dropdown-item">View Lenders</a>
                                        <a href="veh_list.php" class="dropdown-item">View Vehicles</a>
                                        <a href="view_admin.php" class="dropdown-item">View Admins</a>
                                    </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Interaction</a>
                                    <div class="dropdown-menu">
                                        <a href="add_admin.php" class="dropdown-item">Add Admin</a>
                                        <a href="delete_admin.php" class="dropdown-item">Delete Admin</a>
                                    </div>
                            </li>

                            <li class="nav-item">
                                <a href="res_lender.php" class="nav-link">Restrict Lender</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown">Post Alert</a>
                                    <div class="dropdown-menu">
                                        <a href="note_len.php" class="dropdown-item">For Lender</a>
                                        <a href="note_user.php" class="dropdown-item">For User</a>
                                    </div>
                            </li>   
                    </ul>
                </nav>
            </div>
        </div>
    
        