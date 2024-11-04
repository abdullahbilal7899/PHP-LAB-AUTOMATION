<?php

// $servername='localhost';
// $username='root';
// $password='';
// $dbname="aptechnk";

// $conn=mysqli_connect($servername,$username,$password,"$dbname");

$conn=mysqli_connect('localhost','root','',"eproject");

if(!$conn){

echo "Database Error";

}

$conn2=mysqli_connect('localhost','root','',"eproject_prod");

if(!$conn2){

echo "Database Error";

}


?>