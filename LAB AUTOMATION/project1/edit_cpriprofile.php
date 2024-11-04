<?php


session_start();
require('checksession.php');

include 'database.php';

$email = $_GET['email'];



// echo "WELCOME ".$data['admin_name'];


$email = $_GET['email'];

$sql = "SELECT * from cpri where cpri_email='$email'";

$res1 = mysqli_query($conn,$sql);

$data1 = mysqli_fetch_array($res1);

if(isset($_POST['save'])){

    $cpri_name = $_POST['cpri_name'];
    $cpri_email = $_POST['cpri_email'];
    $cpri_password = $_POST['cpri_password'];
 
    
    $sql = "UPDATE cpri SET cpri_name ='$cpri_name',cpri_email='$cpri_email',cpri_password='$cpri_password' where cpri_email='$email'";
        
        mysqli_query($conn,$sql);
    
        $email = $_GET['email'];
		header('Location:index.php');


        
        }
    
    
 
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

        <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
		
		
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">


<style>



.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
}

.container{
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap :7rem;
    padding: 0 2rem;
}

.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.login-content{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
}

.img img{
	width: 300px;
margin:0 200px 0 0;
}

form{
	width: 360px;
}

.login-content img{
    height: 100px;
}

.login-content h2{
	margin: 15px 0;
	color: #333;
	text-transform: uppercase;
	font-size: 1.2rem;
}

.login-content .input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.login-content .input-div.one{
	margin-top: 0;
}

.i{
	color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
}

.i i{
	transition: .3s;
}

.input-div > div{
    position: relative;
	height: 45px;
}

.input-div > div > h5{
	position: absolute;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
	color: #999;
	font-size: 18px;
	transition: .3s;
}

.input-div:before, .input-div:after{
	content: '';
	position: absolute;
	bottom: -2px;
	width: 0%;
	height: 2px;
	background-color: #38d39f;
	transition: .4s;
}

.input-div:before{
	right: 50%;
}

.input-div:after{
	left: 50%;
}

.input-div.focus:before, .input-div.focus:after{
	width: 50%;
}

.input-div.focus > div > h5{
	top: -5px;
	font-size: 15px;
}

.input-div.focus > .i > i{
	color: #38d39f;
}

.input-div > div > input{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	background: none;
	padding: 0.5rem 0.7rem;
	font-size: 1.2rem;
	color: #555;
	font-family: 'poppins', sans-serif;
}

.input-div.pass{
	margin-bottom: 4px;
}



.btn1{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.btn1:hover{
	background-position: right;
}


@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
}

@media screen and (max-width: 1000px){
	form{
		width: 290px;
	}

	.login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 400px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}

	.img{
		display: none;
	}

	.wave{
		display: none;
	}

	.login-content{
		justify-content: center;
	}
}



</style>






  </head>
  <body>
  

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
                                    <button style="margin-right:50px;" class="btn" type="submit" 
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
             
                    <li class="breadcrumb-item active" aria-current="page">Edit My Profile</li>
                  </ol>                
            </div>
			
		   </div>
		   
		   
		   
		   <!--------main-content------------->
		   
		
           <img  class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img  src="images\undraw_post_online_re_1b82.svg">
		</div>
		<div class="login-content">
			<form action="" method="post" enctype="multipart/form-data">
				<img src="images/avatar.svg">
			
				<h2 class="title">Update Profile Details</h2>
				<br>
			
				<div class="input-div one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
						
							<input type="text" class="input" name="cpri_name" value="<?php echo $data1['cpri_name'] ?>" placeholder="Username" required>
					</div>
				 </div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="email" class="input" name="cpri_email" value="<?php echo $data1['cpri_email'] ?>" placeholder="Email" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	
           		    	<input type="password" id="password-field" class="input" name="cpri_password" value="<?php echo $data1['cpri_password'] ?>" placeholder="Password" required   >   <span style="  float: right;margin-left: -25px; margin-top: 20px;position: relative;z-index: 2;font-size:20px;" toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            	   </div>
            	</div>

            
            	<input type="submit" class="btn1" value="Update Details" name="save">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>







  
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


        $(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
		
</script>
  
  



  </body>
  
  </html>


