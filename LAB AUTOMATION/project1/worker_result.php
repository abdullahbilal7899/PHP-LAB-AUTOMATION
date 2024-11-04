<?php


session_start();
require('checksession.php');

include 'database.php';

$email = $_GET['email'];

$sql = "SELECT * from worker where worker_email = '$email'";

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

	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">




      <link rel="stylesheet" href="custresult.css">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>
  <body style="background-color:rgb(166, 245, 245);">
  

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
                    <a href="worker_home.php?email=<?php echo $_GET['email']; ?>" class="dashboard"><i class="material-icons">home</i>
					<span>Home</span></a>
                </li>
		

                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">engineering</i>Workers</a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="worker_detail.php?email=<?php echo $_GET['email']; ?>">Worker Details</a>
                        </li>
                        <li>
                            <a href="create_worker.php?email=<?php echo $_GET['email']; ?>">Add Worker</a>
                        </li>
                      
                    </ul>
                </li>
                
               
				 <li  class="">
                    <a href="worker_prod.php?email=<?php echo $_GET['email']; ?>"><i class="material-icons">inventory</i><span>Products
					</span></a>
                </li>
				
                <li  class="">
                    <a href="worker_result.php?email=<?php echo $_GET['email']; ?>"><i class="material-icons">list_alt</i><span>Results
					</span></a>
                </li>
				 
               
               <li class="">
                    <a href="worker_profile.php?email=<?php echo $_GET['email']; ?>"><i style="font-size:30px;" class="material-symbols-outlined">person_filled</i><span>My Profile</span></a>
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
                                        <a href="worker_profile.php?email=<?php echo $_GET['email']; ?>">
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
                <h4 class="page-title">LAB WORKER</h4>  
              
                  <ol class="breadcrumb">
             
                    <li class="breadcrumb-item active" aria-current="page">Result</li>
                  </ol>                
            </div>
			
		   </div>
		   
		   
		   
		   <!--------main-content------------->
		   
		
           <div class="container mydiv">
    <div class="row">
      
    <?php

include 'database.php';

$sql = "
SELECT product.product_name,product.revise_product,product.product_image,product.datee,testing.test_id,testing.test_performer,testing.test_performed,testing.remarks,testing.product_id,product.product_status,testing.result FROM product JOIN testing WHERE product.product_id= testing.product_id;
";




$query = mysqli_query($conn2,$sql);











while($arr = mysqli_fetch_array($query))
{



?>
       
       <div style="margin-top:20px;" class="col-md-4">
            <!-- bbb_deals -->
            <div style="height:600px;background-color:rgb(240, 240, 240);" class="bbb_deals">
               
                <div class="bbb_deals_title"><?php echo $arr['product_name'];?></div>
                <div class="bbb_deals_slider_container">
                    <div class=" bbb_deals_item">
                        <div class="bbb_deals_image"><img style="height:200px;" src="<?php echo $arr['product_image']; ?>" alt=""></div>
                        <div class="bbb_deals_content">
                        <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                <div style="font-size:15px;" class="bbb_deals_item_category">Test Id: <?php echo $arr['test_id']; ?></div>
                              
                            </div>
                        <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                <div style="font-size:15px;" class="bbb_deals_item_category">Product Id: <?php echo $arr['product_id']; ?></div>
                              
                            </div>
                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                <div style="font-size:15px;" class="bbb_deals_item_category">Test Performed: <?php echo $arr['test_performed']; ?></div>
                              
                            </div>
                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                <div class="bbb_deals_item_category">Test Performer: <?php echo $arr['test_performer']; ?></div>
                              
                            </div>
                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                <div style="font-size:20px;" class="bbb_deals_item_name">Result: <?php echo $arr['result']; ?></div>
                                <div class="bbb_deals_item_price ml-auto"></div>
                            </div>
                            <div class="available">
                                <div class="available_line d-flex flex-row justify-content-start">
                                    <div class="available_title">Revise Product: <span><?php echo $arr['revise_product']; ?></span></div>
                                 
                                </div>
                                <div class="bbb_deals_item_category">Remarks: <?php echo $arr['remarks']; ?></div>
                                <div class="available_bar"><span style="width:17%"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
<?php

}

?>










  
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


