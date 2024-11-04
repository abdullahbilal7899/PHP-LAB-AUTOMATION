<?php

include 'database.php';


if(isset($_POST['save'])){

$remarks = $_POST['remarks'];

$product_id=$_GET['product_id'];
$test_id=$_GET['test_id'];







    
    $sql = "UPDATE  testing SET  remarks='$remarks' where product_id='$product_id' ";




    mysqli_query($conn2,$sql);


    $email = $_GET['email'];
    
    header('Location:customer_result.php?email='.$email);
    
    


}


?>