<?php

function get_admin_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"vehicle");
    $admin_count = 0;
    $query = "select count(*) as admin_count from admin";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $admin_count = $row['admin_count'];
    }
    return($admin_count);
}

function get_user_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"vehicle");
    $user_count = 0;
    $query = "select count(*) as user_count from user";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $user_count = $row['user_count'];
    }
    return($user_count);
}

function get_lender_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"vehicle");
    $len_count = 0;
    $query = "select count(*) as len_count from lender";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $len_count = $row['len_count'];
    }
    return($len_count);
}

function get_veh_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"vehicle");
    $veh_count = 0;
    $query = "select count(*) as veh_count from vehi";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $veh_count = $row['veh_count'];
    }
    return($veh_count);
}

function get_approve_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"vehicle");
    $approve_count = 0;
    $query = "select count(*) as approve_count from approve ";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $approve_count = $row['approve_count'];
    }
    return($approve_count);
}

function get_notelen_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"vehicle");
    $notelen_count = 0;
    $query = "select count(*) as notelen_count from note_lender";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $notelen_count = $row['notelen_count'];
    }
    return($notelen_count);
}

function get_noteuser_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"vehicle");
    $noteuser_count = 0;
    $query = "select count(*) as noteuser_count from note_user";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $noteuser_count = $row['noteuser_count'];
    }
    return($noteuser_count);
}

function get_feed_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"vehicle");
    $feed_count = 0;
    $query = "select count(*) as feed_count from ssue";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $feed_count = $row['feed_count'];
    }
    return($feed_count);
}

function get_request_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"vehicle");
    $req_count = 0;
    $query = "select count(*) as req_count from request";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $req_count = $row['req_count'];
    }
    return($req_count);
}

function get_userapprove_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"vehicle");
    $approve_count = 0;
    $query = "select count(*) as approve_count from approve where unid= $_SESSION[unid]";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $approve_count = $row['approve_count'];
    }
    return($approve_count);
}