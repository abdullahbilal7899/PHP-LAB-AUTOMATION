<?php

include 'database.php';

$worker_id=$_GET['worker_id'];
$email=$_GET['email'];

$delete="DELETE FROM worker where worker_id='$worker_id'";

mysqli_query($conn,$delete);


header('Location:worker_detail.php?email='.$email);




?>