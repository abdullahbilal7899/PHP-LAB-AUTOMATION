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
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

      <style>

        .check{
     
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f4f4f4;
    background-image: url(images/undraw_in_thought_re_qyxl.svg);
background-repeat: no-repeat;
background-position: right;

        }
     

.profile-card{
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 370px;
    width: 100%;
    background-color: #fff;
    border-radius: 24px;
    padding: 25px;
    box-shadow: 0 5px 10px rgb(0  ,0   ,0  ,0.1 );
    position: relative;

}

.image{
    position: relative;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background-color: aqua;
    padding: 3px;
    margin-bottom: 10px;
}

.image .profile-img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid #fff;
}

.profile-card .text-data{

    display: flex;
    flex-direction: column;
    align-items: center;
color: #333;
}

.profile-card .media-buttons{
display: flex;
align-items: center;
margin-top: 50px;

    
}

.media-buttons .link{
    height: 34px;
    width: 34px;
    border-radius: 50%;
    margin: 0 8px;
    background-color: #4070f4;
    display: flex;
    align-items: center;
justify-content: center;
color: #fff;
font-size: 18px;
text-decoration: none;
}

.text-data .name{
    font-size: 22px;
    font-weight: 500;
}


.text-data .email{
    font-size: 15px;
    font-weight: 400;
}

.text-data .email1{
    font-size: 15px;
    font-weight: 400;
}


.profile-card .buttons{
    display: flex;
    align-items: center;
    margin-top: 25px;
}

.buttons .button{
    color: #fff;
    font-size: 12px;
    font-weight: 400;
    border-radius: 24px;
    margin: 0 10px;
    padding: 8px 24px;
    background-color: #4070f4;
    cursor: pointer;
    transition: all 0.3s ease;
}


    .buttons .button:hover{
        background-color: #0e4bf1;
    }

    .profile-card::before{
        content: '';
        top: 0;
        left: 0;
        border-radius: 24px 24px 0 0;
        position: absolute;
        height: 36%;
        width: 100%;
        background-color: #4070f4;

    }

    .buttons .button a{
        text-decoration:none;
        color:#fff;
    }



      </style>

  </head>
  <body style=" background-color: #f4f4f4;" >
  

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
             
                    <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                  </ol>                
            </div>
			
		   </div>

        <br>
		   
		   
		   <!--------main-content------------->
           <div class="check">

           <div class="profile-card">

<div class="image">

<img src="images/user.png" alt="" class="profile-img">

</div>

<div class="text-data">
    <span style="text-transform:none" class="name"><?php echo $data['cpri_name'] ?></span>
    <span style="text-transform:none"  class="email"><?php echo $data['cpri_email'] ?></span>
    <span style="text-transform:none"  class="email1" >Password:<?php echo $data['cpri_password'] ?></span>
</div>

<div class="media-buttons">
    <a href="" style="background: #4267b2 ;" class="link">
        <i class='bx bxl-facebook'></i>
    </a>
    <a href="" style="background: #e1306c ;" class="link">
        <i class='bx bxl-instagram' ></i>
    </a>
    <a href="" style="background: #1da1f2;" class="link">
        <i class='bx bxl-twitter' ></i>
    </a>
</div>

<span class="name" style="margin-top: 10px;">Our Social Platforms</span>


<div class="buttons">

    <button class="button"><a  href="edit_cpriprofile.php?email=<?php echo $_GET['email']; ?>  "  >Edit Details</a></button>
<button   class="button"><a  href="delete_cpriprofile.php?email=<?php echo $_GET['email']; ?>  "  >Delete Account</a></button>
</div>

    </div>

		   
    </div>








  
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
  
  

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


  </body>
  
  </html>


