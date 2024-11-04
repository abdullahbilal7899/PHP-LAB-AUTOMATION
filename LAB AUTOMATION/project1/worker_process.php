<?php

include 'database.php';

if(isset($_POST['save'])){



$worker_name=$_POST['worker_name'];
$worker_email=$_POST['worker_email'];
$worker_password=$_POST['worker_password'];









$sql="INSERT INTO worker(worker_name,worker_email,worker_password)  VALUES('$worker_name','$worker_email','$worker_password')";

$email=$_GET['email'];

if(mysqli_query($conn,$sql)){




header('Location:worker_detail.php?email='.$email);

}
else{
    echo "<script>('Your account has not been created..!');</script>";


}

}






?>
