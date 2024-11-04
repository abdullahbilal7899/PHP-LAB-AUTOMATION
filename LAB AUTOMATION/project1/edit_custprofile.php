
<?php


session_start();
require('checksession.php');

include 'database.php';

$email = $_GET['email'];



// echo "WELCOME ".$data['admin_name'];


$email = $_GET['email'];

$sql = "SELECT * from customers where customer_email='$email'";

$res1 = mysqli_query($conn,$sql);

$data1 = mysqli_fetch_array($res1);

if(isset($_POST['save'])){

    $customer_name = $_POST['customer_name'];
 
    $customer_password = $_POST['customer_password'];
    $customer_phone = $_POST['customer_phone'];
    
    $sql = "UPDATE customers SET customer_name ='$customer_name', customer_password='$customer_password', customer_phone='$customer_phone' where customer_email='$email'";
        
        mysqli_query($conn,$sql);
    
        $email = $_GET['email'];
        
        header('Location:customer_profile.php?email='.$email);


        
        }

        if(isset($_POST['save'])){
            $customer_email = $_POST['customer_email'];


$sql2="UPDATE customers SET customer_email='$customer_email' where customer_email='$email'";



  
mysqli_query($conn,$sql2);
    
$email = $_GET['email'];

header('Location:index.php');


        }
    
    
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page With Light/Dark Mode</title>
    <link rel="stylesheet" href="stylenew.css" />
    <link rel="stylesheet" href="custprofile.css">
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <img src="images/shape.png" alt="" class="shape" />

        <header>
          <div class="container">
            <div class="logo">
              <img src="images/workerlogo.png" alt="Logo" />
              <h3 style="font-size:30px;margin-left:5px;" >S <i style="color:#ff7782;">R</i> S L <i style="color:#ff7782;">A</i> B</h3>  
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


        <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow">SRS LAB</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15"> Update Your Details</span>
              <form method="post" enctype="multipart/form-data" id="stripe-login">
                <div class="field padding-bottom--24">
                    <label for="email">Name</label>
                    <input type="text" name="customer_name" value="<?php echo $data1['customer_name'] ; ?>">
                  </div>
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input type="email" name="customer_email" value="<?php echo $data1['customer_email'] ; ?>" >
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Password</label>
                   
                  </div>

                  
                  <input type="text"  name="customer_password" value="<?php echo $data1['customer_password'] ; ?>">
                </div>

                <div class="field padding-bottom--24">
                    <div class="grid--50-50">
                      <label for="password">Phone</label>
                     
                    </div>
  
                    
                    <input type="number" name="customer_phone" value="<?php echo $data1['customer_phone'] ; ?>">
                  </div>
                 
                <div class="field padding-bottom--24">
                  <input type="submit" name="save" value="Update">
                </div>
                <div class="field">
                  <a class="ssolink" href="#"></a>
                </div>
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
          
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">© SRSLAB</a></span>
              <span><a href="#">Contact</a></span>
              <span><a href="#">Privacy & terms</a></span>
            </div>
          </div>
        </div>
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
