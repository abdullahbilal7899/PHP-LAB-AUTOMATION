<?php


session_start();
require('checksession.php');

include 'database.php';

$email = $_GET['email'];

$sql = "SELECT * from cpri where cpri_email = '$email'";

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_array($result);

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>crud dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="test_prod.css">
	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">




       
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    



      <style>

input[type=text]{
  width: 100%;
  padding: 12px;
  border: 1px solid black;
  border-radius: 4px;
  resize: vertical;
 
  margin-top:5px;
  height:40px;
  margin-right:5px;
}

input.fail[type=submit]{
 border:2px solid red;
 background-color: transparent;
 cursor: pointer;
}

input.pass[type=submit]{
 border:2px solid rgb(0, 94, 0);
 background-color: transparent;
 cursor: pointer;
 width:100px;
}


input.pass:hover[type=submit]{
    border: 2px solid rgb(0, 94, 0);
    background-color: rgb(25, 182, 25);
    cursor: pointer;
    
      }

      input.fail:hover[type=submit]{
    border: 2px solid red;
    background-color: rgb(230, 55, 55);
    cursor: pointer;
    
      }
  
  


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-weight:500;
  
}


.col-15 {
  float: left;
  width: 25%;

 
}

.col-60 {
  float: left;
  width: 50%;
  margin-top: 15px;
  margin-left:25px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other
@media screen and (max-width: 600px) {
  .col-15, .col-60 {
    width: 100%;
    margin-top: 0;
  }
}


</style>











  </head>
  <body  style="background-color:aqua;" >
  

<div class="wrapper">


        <div class="body-overlay"></div>
		
		<!-------------------------sidebar------------>
		     <!-- Sidebar  -->
        <nav id="sidebar">
             <div class="sidebar-header">
                <h3 style="font-size:30px;margin-left:5px;" ><img style="width:60px;height:60px;" src="images/workerlogo.png" class="img-fluid"/>S<span style="color:#ff7782;">R</span>S L<span style="color:#ff7782;">A</span>B</h3> 
            </div> 
          



            <ul class="list-unstyled components">
			<li  >
                    <a href="cpri_home.php?email=<?php echo $_GET['email']; ?>" class="dashboard"><i class="material-icons">home</i>
					<span>Home</span></a>
                </li>
		

                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">engineering</i>Workers</a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="cpri_detail.php?email=<?php echo $_GET['email']; ?>">Cpri  Worker Details</a>
                        </li>
                        <li>
                            <a href="create_cpri.php?email=<?php echo $_GET['email']; ?>">Add Cpri Worker</a>
                        </li>
                      
                    </ul>
                </li>
                
                <li  class="">
                    <a href="cpri_prod.php?email=<?php echo $_GET['email']; ?>"><i class="material-icons">inventory</i><span>Products
					</span></a>
                </li>
				
                <li  class="">
                    <a href="cpri_result.php?email=<?php echo $_GET['email']; ?>"><i class="material-icons">list_alt</i><span>Results
					</span></a>
                </li>
				 
               
               
               
               <li class="">
                    <a href="cpri_profile.php?email=<?php echo $_GET['email']; ?>"><i style="font-size:30px;" class="material-symbols-outlined">person_filled</i><span>My Profile</span></a>
                </li>
                <br>
                <br>
				
				 <li  class="">
                    <a href="logout.php"><i class="material-icons">logout</i><span>LogOut
					</span></a>
                </li>
               
               
            </ul>

           
        </nav>
		
		
		
		
		<!--------page-content---------------->
		
		<div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row"> 
                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt
							   </span>
                         </div>
                    </div> 
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" 
								  placeholder="Search">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" 
									id="button-addon2">GO</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
							 <nav class="navbar p-0">
                        <ul class="nav navbar-nav flex-row ml-auto">   
                            <li class="dropdown nav-item active">
                           
								</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown">
                                <img src="images/user.png" style="width:50px; border-radius:50%;height:50px"/>
								<span class="xp-user-live"></span>
								</a>
								<ul class="dropdown-menu small-menu">
                                    <li>
                                        <a href="cpri_profile.php?email=<?php echo $_GET['email']; ?>">
										  <span class="material-icons">
person_outline
</span>Profile

										</a>
                                    </li>
                                 
                                    <li>
                                        <a href="logout.php"><span class="material-icons">
logout</span>Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    
               
            </nav>
							
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div> 
                <!-- End XP Row -->

            </div>
      
		     <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">CPRI WORKER</h4>  
              
                  <ol class="breadcrumb">
             
                    <li class="breadcrumb-item active" aria-current="page">Testing</li>
                  </ol>                
            </div>
			
		   </div>
		   
		   
		   
		   <!--------main-content------------->
		   
		
           <?php

include 'database.php';


$product_id= $_GET['product_id'];

$sql2 = "SELECT * from product where product_id='$product_id' AND product_status='fail'";


$sql3= "SELECT * from testing where result='fail'";


$query = mysqli_query($conn2,$sql2);
$arr = mysqli_fetch_array($query);




$query3 = mysqli_query($conn2,$sql3);
$arr3 = mysqli_fetch_array($query3);



$email = $_GET['email'];

$sql = "SELECT * from cpri where cpri_email = '$email'";

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_array($result);



    ?>	






		
           <div class="container py-4 my-4 mx-auto d-flex flex-column">
        <div class="header">
            <div class="row r1">
                <div class="col-md-9 abc">
                    <h1><?php echo $arr['product_name']; ?></h1>
                </div>
              
        </div>
        <div class="container-body mt-4">
            <div class="row r4">
                <div class="col-md-5 p-0 klo">
                    <form action="cpri_pass.php?email=<?php echo $_GET['email']; ?>&product_id=<?php echo $_GET['product_id']; ?>" method="post" enctype="multipart/form-data"  style="align-items:center;" >
                    <ul>
                  
                    <li>Product Id: <?php echo $arr['product_id']; ?></li>
                        <li>Revise Product: <?php echo $arr['revise_product']; ?></li>
                     
                       

                        <div class="row" style="display:none;">
    <div class="col-15">
      <label  style="margin-left:18px;" name="product_id" for="fname" required>Product Id:</label>
    </div>
    <div class="col-60">
      <input style="margin-left:18px;"  type="text" id="fname" name="product_id" placeholder=""  value="<?php echo $arr['product_id']; ?> " >
    </div>
  </div>


 



  

  <div class="row" style="display:none;">
  <div class="col-15">
      <label  style="margin-left:18px;" name="product_image" for="fname" required>Product Image:</label>
    </div>
    <div class="col-60">
      <input style="margin-left:18px;"  type="text" id="fname" name="product_image" placeholder=""  value="<?php echo $arr['product_image']; ?> " >
    </div>
  </div>



  <div class="row" style="display:none;">
    <div class="col-15">
      <label  style="margin-left:18px;" name="product_name" for="fname" required>Product Name:</label>
    </div>
    <div class="col-60">
      <input style="margin-left:18px;"  type="text" id="fname" name="product_name"  placeholder=""  value="<?php echo $arr['product_name']; ?> " >
    </div>
  </div>




  <div class="row" style="">
    <div class="col-15">
      <label  style="margin-left:18px;" name="test_performed" for="fname" required>Test Performed:</label>
    </div>
    <div class="col-60">
      <input style="margin-left:18px;"  type="text" id="fname" name="test_performed" placeholder="" required>
    </div>
  </div>



  <div class="row" style="display:none;">
    <div class="col-15">
      <label  style="margin-left:18px;" name="test_id" for="fname" required>Test Id :</label>
    </div>
    <div class="col-60">
      <input style="margin-left:18px;"  type="text" id="fname" name="test_id" placeholder="" required Value="<?php echo $arr3['test_id']; ?>">
    </div>
  </div>





  <div class="row" style="display:none;">
    <div class="col-15">
      <label  style="margin-left:18px;" name="test_performer" for="fname" required>Test Performer:</label>
    </div>
    <div class="col-60">
      <input style="margin-left:18px;"  type="text" id="fname" name="test_performer"  placeholder=""  value="<?php echo $data['cpri_name']; ?>" >
    </div>
  </div>

  <div class="row" style="display:none;">
    <div class="col-15">
      <label  style="margin-left:18px;" name="result" for="fname" required>Result:</label>
    </div>
    <div class="col-60">
      <input style="margin-left:18px;"  type="text" id="fname" name="result"  placeholder=""  value="  " >
    </div>
  </div>
  <div class="row" style="display:none;">
    <div class="col-15">
      <label  style="margin-left:18px;" name="product_status" for="fname" required>Product Status:</label>
    </div>
    <div class="col-60">
      <input style="margin-left:18px;"  type="text" id="fname" name="product_status"  placeholder=""  value="<?php echo $arr['product_status']; ?> " >
    </div>
  </div>

  
</ul>
                </div>
                <div class="col-md-7"> <img src="<?php echo $arr['product_image']; ?>" width="90%" height="95%"> </div>
            </div>
        </div>
        <div class="footer d-flex flex-column mt-3">
            <div class="row r4">
                <div class="col-md-2 myt "><input  class="pass"  type="submit" name="pass" value="Pass" ></div>
              <div class="col-md-2 myt "><input type="submit" class="fail" name="fail" value="Fail (Send to Remanufacture)" ></button></div>
            </div>
        </div>
    </div>

    </form>














  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
</script>
  
  



  </body>
  
  </html>


