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

$product_id=$_GET['product_id'];





$sql="INSERT INTO testing(test_performed,test_performer,result,product_name,product_id,product_image)  VALUES('$test_performed','$test_performer','pass','$product_name','$product_id','$product_image')";


$sql2="UPDATE product SET product_status='pass' where product_id='$product_id'";



if(mysqli_query($conn2,$sql2) && mysqli_query($conn2,$sql)){




header('Location:worker_result.php?email='.$email);

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
    
    $product_id=$_GET['product_id'];
    
    
    
    
    
    $sql="INSERT INTO testing(test_performed,test_performer,result,product_name,product_id,product_image)  VALUES('$test_performed','$test_performer','fail(Proceed To Cpri For further Testing)','$product_name','$product_id','$product_image')";
    
    
    $sql2="UPDATE product SET product_status='fail' where product_id='$product_id'";
    
    
    
    if(mysqli_query($conn2,$sql2) && mysqli_query($conn2,$sql)){
    
    
    
    
    header('Location:worker_result.php?email='.$email);
    
    }
    else{
        echo "<script>('Your account has not been created..!');</script>";
    
    
    }
    
    }
    
    




?>