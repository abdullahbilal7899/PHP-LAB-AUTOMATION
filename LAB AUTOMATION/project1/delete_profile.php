<?php

include 'database.php';

$email=$_GET['email'];

$delete="DELETE  FROM worker where worker_email='$email'";

mysqli_query($conn,$delete);


header('Location:index.php');




?>