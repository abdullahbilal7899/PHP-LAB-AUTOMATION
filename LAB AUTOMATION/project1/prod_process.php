<?php

include 'database.php';


if(isset($_POST['save'])){

$product_name = $_POST['product_name'];
$product_id = $_POST['product_id'];
$date =$_POST['datee'];
$product_image = $_FILES['product_image'];
$revise_product = $_POST['revise_product'];




$filename = $product_image['name'];
$filepath = $product_image['tmp_name'];
$fileerror = $product_image['error'];



if($fileerror == 0){

    $destfile = 'uploads/'.$filename;
    
    move_uploaded_file($filepath,$destfile);
    
    $sql = "INSERT into product(product_name,product_id,product_image,datee,revise_product) VALUES('$product_name','$product_id','$destfile','$date','$revise_product' )";




    mysqli_query($conn2,$sql);


    $email = $_GET['email'];
    
    header('Location:custprod.php?email='.$email);
    
    }


}


?>