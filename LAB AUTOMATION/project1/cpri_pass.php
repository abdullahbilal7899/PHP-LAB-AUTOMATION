<?php

include 'database.php';

if(isset($_POST['pass'])){



$test_performed=$_POST['test_performed'];
$test_performer=$_POST['test_performer'];
$_POST['result'];
$_POST['product_status'];
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$product_image=$_POST['product_image'];


$email=$_GET['email'];
$test_id=$_GET['test_id'];
$product_id=$_GET['product_id'];





$sql="UPDATE testing SET result='pass(By CPRI Testing)',test_performed='$test_performed',test_performer='$test_performer',product_image='$product_image' where  product_id='$product_id'";


$sql2="UPDATE product SET product_status='pass(By CPRI)' where product_id='$product_id'";



if(mysqli_query($conn2,$sql2) && mysqli_query($conn2,$sql)){




header('Location:cpri_result.php?email='.$email);

}
else{
    echo "<script>('Your account has not been created..!');</script>";


}

}



if(isset($_POST['fail'])){



    $test_performed=$_POST['test_performed'];
    $test_performer=$_POST['test_performer'];
    $_POST['result'];
    $_POST['product_status'];
    $product_id=$_POST['product_id'];
    $product_name=$_POST['product_name'];
    $product_image=$_POST['product_image'];
    
    $email=$_GET['email'];
    $test_id=$_GET['test_id'];
    $product_id=$_GET['product_id'];
    
    
    
    
    
    $sql="UPDATE testing SET result='Fail(Return For Remanufacture)',test_performed='$test_performed',test_performer='$test_performer',product_image='$product_image' where product_id='$product_id'";
    
    
    $sql2="UPDATE product SET product_status='remanufacture' where product_id='$product_id'";
    
    
    
    if(mysqli_query($conn2,$sql2) && mysqli_query($conn2,$sql)){
    
    
    
    
    header('Location:cpri_result.php?email='.$email);
    
    }
    else{
        echo "<script>('Your account has not been created..!');</script>";
    
    
    }
    
    }
    
    




?>