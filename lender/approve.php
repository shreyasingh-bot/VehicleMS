<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"vehicle");
	$rqtid = "";
	$unid = "";
	$uname = "";
    $cid ="";
	$vname = "";
    $vnum = "";
    $days = "";
	$date = "";
    $pick = "";
	$tid = "";
	$query = "select * from request where rqtid = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$rqtid = $row['rqtid'];
		$unid = $row['unid'];
		$uname = $row['uname'];
        $cid = $row['cid'];
        $vname = $row['vname'];
		$vnum = $row['vnum'];
        $days = $row['days'];
		$date = $row['date'];
        $pick = $row['pick'];
		$tid = $row['tid'];
	}
?>

<?php
	
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"vehicle");
        $query_var= "insert into approve values ('$rqtid','$_SESSION[unid]','$unid','$uname','$cid','$vname','$vnum','$days','$date','$pick','$tid')";
		$query_run = mysqli_query($connection,$query_var);

        $query_v= "delete from request where rqtid = $_GET[bn]";
		$query_r = mysqli_query($connection,$query_v);

        ?>
        <script type="text/javascript">
            alert("Request Approved");
            window.location.href = "dashboard.php";
        </script>
        <?php

		
?>
