<?php

include 'database.php';

if(isset($_POST['save'])){



$customer_name=$_POST['name'];
$customer_email=$_POST['email'];
$customer_password=$_POST['password'];
$customer_phone=$_POST['phone'];









$sql="INSERT INTO customers(customer_name,customer_email,customer_password,customer_phone)  VALUES('$customer_name','$customer_email','$customer_password','$customer_phone')";



if(mysqli_query($conn,$sql)){


header('Location:index.php');

}
else{
    echo "<script>('Your account has not been created..!');</script>";


}

}






?>
