
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

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Future is here,</h1>
                <h1>Start Exploring now.</h1>
              </div>
              <p class="text">
              Laboratory automation systems can help labs to streamline workflows through the intelligent integration of robotics and laboratory automation software.
              </p>
              <div class="cta">
                <a href="customer_prod.php?email=<?php echo $_GET['email']; ?>" class="btn">Test Your Product</a>
              </div>
            </div>

            <div class="right">
              <img src="images/undraw_alien_science_re_0f8q.svg" alt="Person Image" class="person" />
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
    <script src="app2.js"></script>
  </body>
</html>
