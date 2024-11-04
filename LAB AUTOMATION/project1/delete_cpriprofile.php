<?php

include 'database.php';

$email=$_GET['email'];

$delete="DELETE  FROM cpri where cpri_email='$email'";

mysqli_query($conn,$delete);


header('Location:index.php');




?>