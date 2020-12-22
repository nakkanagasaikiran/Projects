<?php
session_start();

if(isset($_POST['login']))
{
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$ltype=$_POST['logintype'];
      $_SESSION['user']=$uname;
	  $_SESSION['pass']=$pass;
        
if($uname!="" && $pass!="")
{
if($uname=="admin" && $pass=="admin" && $ltype=="Admin")
{

     echo "<script>document.location='AdminHome.php'</script>";	
}
else if($uname=="student" && $pass=="student" && $ltype=="Student")
{
	 echo "<script>document.location='StudentHome.php'</script>";	
}
else if($uname=="faculty" && $pass=="faculty" && $ltype=="Faculty")
{
	 echo "<script>document.location='FacultyHome.php'</script>";	
}
else
{
	echo '<script>alert("Invalid username and password......")</script>';
}

  
}
else
{
   echo '<script>alert("Please Fill all Details.....")</script>';
}

}

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from shapebootstrap.net/demo/html/corlate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2015 07:58:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BackLog Managment System</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
              
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">BackLog Management System</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php">Home</a></li>
                        <li><a href="AboutUs.php">About Us</a></li>
                        <li><a href="Login.php">Login</a></li>                        
                        <li><a href="ContactUs.php">Contact</a></li>                             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

<section>
     <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Login</h2>
               
            </div> 
            <div class="row contact-wrap "> 
                <div class="status alert alert-success" style="display: none"></div>
                <form class="contact-form"  method="post" enctype="multipart/form-data">
                   
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label><b>User ID *</b></label>
                            <input type="text" name="uname" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label><b>Password *</b></label>
                             <input type="password" name="pass" class="form-control" required="required">
                        </div>     
						<div class="form-group">
                            <label><b>Login Type *</b></label>
                            <select name="logintype" class="form-control">
								<option>-- Select --</option>
								<option>Admin</option>
								<option>Faculty</option>
								<option>Student</option>
								
							</select>
                        </div>     						
                        <div class="form-group">
                            <center><button type="submit" name="login" class="btn btn-primary btn-lg" required="required">Login</button></center>
                        </div>
                    </div>
                </form> 
                <img src="images/login.jpg" width="450px" height="250px" align="right"/><br/>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
  
</section>
  
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
<!-- Mirrored from shapebootstrap.net/demo/html/corlate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2015 08:01:39 GMT -->
</html>