<?php

session_start();


include 'database.php';


if(isset($_POST['email']) && isset($_POST['password'])){

$email=$_POST['email'];
$password=$_POST['password'];



$sql="SELECT * FROM customers where customer_email='$email' and customer_password='$password'";


$query= mysqli_query($conn,$sql);

$sql2="SELECT * FROM worker where worker_email='$email' and worker_password='$password'";

$query2= mysqli_query($conn,$sql2);


$sql3="SELECT * FROM cpri where cpri_email='$email' and cpri_password='$password'";

$query3= mysqli_query($conn,$sql3);





if(mysqli_num_rows($query) == 1){


$row=mysqli_fetch_assoc($query);


if($row['customer_email'] === $email && $row['customer_password'] === $password){

echo "Logged in";

$_SESSION['loginID'] = $row['customer_email'];

$_SESSION['password'] = $row['customer_password'];


header('Location:customer_home.php?email='.$email);


}
else{

echo 'Invalid user and email 1';


}

}
else if(mysqli_num_rows($query2) == 1){


    $row=mysqli_fetch_assoc($query2);


if($row['worker_email'] === $email && $row['worker_password'] === $password){

echo "Logged in";

$_SESSION['loginID'] = $row['worker_email'];

$_SESSION['password'] = $row['worker_password'];

header('Location:worker_home.php?email='.$email);

 

}

else{

    echo 'Invalid user and email 5';

}





}
else if(mysqli_num_rows($query3) == 1){


    $row=mysqli_fetch_assoc($query3);


if($row['cpri_email'] === $email && $row['cpri_password'] === $password){

echo "Logged in";

$_SESSION['loginID'] = $row['cpri_email'];

$_SESSION['password'] = $row['cpri_password'];


header('Location:cpri_home.php?email='.$email);

 

}





}


else{

    echo 'Invalid user and email 4';

}




}
else{
    echo 'Invalid user and email 3';
}



?>