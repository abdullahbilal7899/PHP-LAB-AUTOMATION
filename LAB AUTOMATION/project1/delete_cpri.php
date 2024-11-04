<?php

include 'database.php';

$cpri_id=$_GET['cpri_id'];
$email=$_GET['email'];

$delete="DELETE FROM cpri where cpri_id='$cpri_id'";

mysqli_query($conn,$delete);


header('Location:cpri_detail.php?email='.$email);




?>