<?php

include 'database.php';

if(isset($_POST['save'])){



$cpri_name=$_POST['cpri_name'];
$cpri_email=$_POST['cpri_email'];
$cpri_password=$_POST['cpri_password'];









$sql="INSERT INTO cpri(cpri_name,cpri_email,cpri_password)  VALUES('$cpri_name','$cpri_email','$cpri_password')";

$email=$_GET['email'];

if(mysqli_query($conn,$sql)){




header('Location:cpri_detail.php?email='.$email);

}
else{
    echo "<script>('Your account has not been created..!');</script>";


}

}






?>
