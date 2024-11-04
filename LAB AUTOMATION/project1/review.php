

<?php


session_start();
require('checksession.php');

include 'database.php';

$email = $_GET['email'];

$sql = "SELECT * from customers where customer_email = '$email'";

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_array($result);


$sql2 = "
SELECT product.product_name,product.revise_product,product.product_image,product.datee,testing.test_id,testing.test_performer,testing.test_performed,testing.remarks,testing.product_id,product.product_status,testing.result FROM product JOIN testing WHERE product.product_id= testing.product_id ;
";


$product_id=$_GET['product_id'];

$test_id=$_GET['test_id'];

$query1 = mysqli_query($conn2,$sql2);

$arr = mysqli_fetch_array($query1);






?>


















<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reviews</title>
    <link rel="stylesheet" href="stylenew2.css" />
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <img src="images/shape.png" alt="" class="shape" />

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

       


        <div class="check">
            <span class="big-circle"></span>
            <img src="images/shape2.png" class="square" alt="" />
            <div class="form">
              <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
            
                <p class="text">
                "The customer's perception is your reality."  &nbsp; &nbsp; -Kate Zabriskie
                </p>
 
                <div class="info">
                  <div class="information">
                    <img src="images/location.png" class="icon" alt="" />
                    <p>92 Cherry Drive Uniondale, NY 11553</p>
                  </div>
                  <div class="information">
                    <img src="images/email.png" class="icon" alt="" />
                    <p>srslab@ipsum.com</p>
                  </div>
                  <div class="information">
                    <img src="images/phone.png" class="icon" alt="" />
                    <p>989-567-498</p>
                  </div>
                </div>
      
                <div class="social-media">
                  <p>Connect with us :</p>
                  <div class="social-icons">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-instagram"></i>
                    </a>
                  
                  </div>
                </div>
              </div>
      
      
      
              <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>
      
                <form  action="givereview.php?email=<?php echo $_GET['email']; ?>&product_id=<?php echo $_GET['product_id'];?>&test_id=<?php echo $_GET['test_id'];?>" method="post" enctype="multipart/form-data" autocomplete="off">
                  <h3 class="title">Give your Review</h3>
                  <div class="input-container">
                    <input type="text" name="name" class="input"  value="Product Name: <?php echo $arr['product_name'] ?>"  disabled/>
               
                  
                  </div>
                  <div class="input-container">
                    <input type="email" name="email" class="input"  value="Product Id: <?php echo $arr['product_id']?>" disabled />
                 
                  </div>
                  <div class="input-container">
                    <input type="text" name="phone" class="input"  value="Result: <?php echo $arr['result'] ?>" disabled  />
            
                   
                  </div>
                  <div class="input-container">
                    <input type="text" name="phone" class="input"  value="Revise Product: <?php echo $arr['revise_product'] ?>" disabled  />
            
                   
                  </div>
                  <div class="input-container">
                    <input type="text" name="phone" class="input"  value="Test Performer: <?php echo $arr['test_performer'] ?>" disabled  />
            
                   
                  </div>
                  <div class="input-container">
                    <input type="text" name="phone" class="input"  value="Test Performed: <?php echo $arr['test_performed'] ?>" disabled  />
            
                   
                  </div>
                  <div class="input-container textarea">
                    <textarea name="remarks" class="input"></textarea>
                    <label for="">Remarks</label>
                    <span>Reamrks</span>
                  </div>
                  <input type="submit" value="Submit" class="btn" name='save' />
                </form>
              </div>
            </div>
          </div>

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
    <script src="app3.js"></script>
    <script src="app2.js"></script>
  </body>
</html>
