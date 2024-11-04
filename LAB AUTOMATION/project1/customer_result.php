
<?php


session_start();
require('checksession.php');

include 'database.php';

$email = $_GET['email'];

$sql = "SELECT * from customers where customer_email = '$email'";

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page With Light/Dark Mode</title>
    <link rel="stylesheet" href="stylenew.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="customer_result.css">
  
  </head>
  <body>
    <main  >
      <div class="big-wrapper light">
        <img src="images/.png" alt="" class="shape" />

        <header>
          <div class="container">
            <div class="logo">
              <img src="images/workerlogo.png" alt="Logo" />
              <h3 style="font-size:30px;margin-left:5px;" >S<span style="color:#ff7782;">R</span>S L<span style="color:#ff7782;">A</span>B</h3> 
            </div>

            <div class="links">
              <ul>
              <li><a href="customer_home.php?email=<?php echo $_GET['email']; ?>">Home</a></li>
                     <li><a href="customer_prod.php?email=<?php echo $_GET['email']; ?>">Test Product</a></li>
                <li><a href="customer_profile.php?email=<?php echo $_GET['email']; ?>">My Profile</a></li>
             <li><a href="customer_result.php?email=<?php echo $_GET['email']; ?>">Product Results</a></li>
             <li><a href="custprod.php?email=<?php echo $_GET['email']; ?>">Product Detials</a></li>
             <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <?php

include 'database.php';

$sql = "
SELECT product.product_name,product.revise_product,product.product_image,product.datee,testing.test_id,testing.test_performer,testing.test_performed,testing.remarks,testing.product_id,product.product_status,testing.result FROM product JOIN testing WHERE product.product_id= testing.product_id ;
";




$query = mysqli_query($conn2,$sql);










while($arr = mysqli_fetch_array($query))
{

$product_id=$arr['product_id'];
$test_id=$arr['test_id'];

        ?>

  


        <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $arr['product_image']; ?>"></div>
                    <div class="col-md-6 mt-1">
                        <h5 style=" font-weight:bold;"><?php echo $arr['product_name'];?></h5>
                      
                        <div class="mt-1 mb-1 spec-3"><span ></span><br><span></span><span style="font-size:20px;font-weight:bold;">Result: <?php echo $arr['result'];?> </span><br><span class="dot"></span>Product Id: <?php echo $arr['product_id'];?> <span> <br></span></div>
                        <div class="mt-1 mb-1 spec-3"><span></span><span class="dot"></span><span>Test Performer: <?php echo $arr['test_performer'];?> </span><br><span class="dot"></span><span>Test Performed:  <?php echo $arr['test_performed'];?><br></span></div>
                        <div class="mt-1 mb-1 spec-3"><span></span><span class="dot"></span><span>Revise Product: <?php echo $arr['revise_product']; ?> </span></div>
                        <p class="text-justify text-truncate para mb-0">Remarks: <?php echo $arr['remarks']; ?> <br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            
                        </div>

                        <div class="d-flex flex-column mt-5"><a style="text-decoration:none;" href="review.php?email=<?php echo $_GET['email'];?>&product_id=<?php echo $product_id; ?>&test_id=<?php echo $test_id; ?>"><button style="width:200px;" class="btn btn-success btn-sm mt-5" type="button"> Give Remarks</button></div></a>
                    </div>
                </div>
             
              
              
            </div>
        </div>
    </div>

    



<?php
}
?>







       





        <div class="bottom-area">
          <div class="container">
            <button style="display:none;" class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="app2.js"></script>
  </body>
</html>
