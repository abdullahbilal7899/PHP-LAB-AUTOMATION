
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
    <link rel="stylesheet" href="cust_profile.css" />
  </head>
  <body>
    <main>
      <div  class="big-wrapper light">
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

            <div  class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>


        <div class="card">
		<div class="info">
			<span class="name"><?php echo $data['customer_name'] ?></span>
			<span class="prof">ID Number: <?php echo $data['customer_id'] ?></span>
			<div class="divider"></div>
			<p class="bio">Email:<?php echo $data['customer_email'] ?> <br> Password:<?php echo $data['customer_password'] ?>  <br> Phone:<?php echo $data['customer_phone'] ?> </p>
		<br><br>

    <div class="buttons">
      <button class="button"><a  href="edit_custprofile.php?email=<?php echo $_GET['email']; ?>  "  >Edit Details</a></button>
<button   class="button"><a  href="delete_custprof.php?email=<?php echo $_GET['email']; ?>  "  >Delete Account</a></button>
</div>

		</div>
		<div  class="photo">
  <img style="height: 100%;  width: 100%;background-size: 100% 100%; position: absolute; bottom: 0; border-radius: 8px; transition: 1s;" src="images/customer.jpg" alt="">
  </div>
	</div>



  <div class="right">
              <img src="images\undraw_designer_re_5v95.svg" alt="Person Image" class="person" />
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
    <script src="app2.js"></script>
  </body>
</html>
