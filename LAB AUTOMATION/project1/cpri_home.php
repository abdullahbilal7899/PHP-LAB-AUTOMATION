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

	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
      <link rel="stylesheet" href="new.css">

  </head>
  <body  >
  

<div class="wrapper">


        <div  class="body-overlay"></div>
		
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
             
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                  </ol>                
            </div>
			
		   </div>
		   
		   
		   
		   <!--------main-content------------->
		   

           <div class="main1">
        <div class="navbar1">
           

       

        
        </div> 
        <br><br>
        <div class="content1">
            <h1 style="margin-left:30px;font-style:italic;">OUR <span style="color:orange;">FUTURE</span> IS HERE</h1>
            <br>
            <p style="font-style:italic;font-size:20px;" class="par">Lab automation is the use of instrumentation to perform laboratory processes, 
          <br> minimal human input. Automation can be used anywhere from a single step of an 
                <br>experimental process, all the way through to the entire workflow.</p>

    

             
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>


  
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

