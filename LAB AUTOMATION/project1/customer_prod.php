
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
    <link rel="stylesheet" href="prod.css" />
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

       <div class="form-v2">
        <div class="page-content">
		<div class="form-v2-content">
			<div class="form-left">
				<figure  class="image-container">
					<img id="chosen-image">
				
				</figure>
				
			</div>
			<form class="form-detail" action="prod_process.php?email=<?php echo $_GET['email']; ?>" method="post" enctype="multipart/form-data" id="myform">
				<h2>Send Product For Test</h2>
				<div class="form-row">
					<label for="full-name">Product id:</label>
					<input type="number" name="product_id" id="full_name" class="input-text" placeholder=""  required/>
				</div>
				<div class="form-row">
					<label for="your_email">Product Name:</label>
					<input type="text" name="product_name" id="your_email" class="input-text" required >
				</div>
				<div class="form-row">
				<label for="password">Revise Product:</label>
					<input type="number" name="revise_product" id="password" class="input-text" required>
				</div>
				<div class="form-row">
					<label for="comfirm-password">Date</label>
					<input type="date" name="datee" id="confirm_password" class="input-text" required>
				</div>
				
				<div class="form-row-last">
					<input type="submit" name="save" class="register" value="Send for Test">
				</div>


				<input type="file" id="upload-button" name="product_image" accept="image/*" required>
				<label  style="color: #fffafa;" class="new" for="upload-button" required>
					<i class="fas fa-upload"></i> &nbsp; Choose A Photo
				</label>

			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

	   
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
    <script src="prod.js"></script>

  </body>
</html>
