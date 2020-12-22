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
                    <a class="navbar-brand" href="">BackLog Management System</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                  
				    <ul class="nav navbar-nav">
				    	<li><a href="AdminHome.php">Home</a></li>
				    	<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Regulation <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="Regulation_ADD.php">ADD</a></li>                                
                                <li><a href="Regulation_View.php">View / Delete</a></li>                               
                            </ul>
                        </li>

                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Subjects <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="Subjects_ADD.php">ADD</a></li>                                
                                <li><a href="Subjects_View.php">View / Delete</a></li>                               
                            </ul>
                        </li>
						
						  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Backlogs <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="Backlogs_ADD.php">ADD</a></li>                              
                                <li><a href="Backlogs_View.php">View / Delete</a></li>                               
                            </ul>
                        </li>
						
						  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                      
                                <li><a href="Admin_Student_BackLog.php">Student Wise BackLogs</a></li>
                                <li><a href="Admin_Subject_BackLog.php">Subject Wise BackLogs</a></li>      
								<li><a href="Admin_Department_BackLog.php">Department Wise BackLogs</a></li> 
								<li><a href="Admin_View_BackLogs.php">Total BackLogs</a></li> 

                            </ul>
                        </li>
							<li><a href="Login.php">Logout</a></li>                 
                    </ul>
					
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
   </header><!--/header-->

  
<section>
        <div class="container">
           <div class="center wow fadeInDown">
		  
              
                <p class="lead">
				
<?php
  $connection=mysql_connect("localhost","root","");
  mysql_select_db("BMS",$connection); 


	$Regulation =$_REQUEST['Regulation'];
	
	
	// sending query	
	mysql_query("DELETE FROM regulation WHERE Regulation='$Regulation'");
		
		
?>

							 <h2>Deleted Regulation Successfully...</h2>
							 <label>
							 <b><a href='Regulation_View.php'>Back List</a></b>
							 </label>
							 
			
				</p>
               </div>
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>

<!-- Mirrored from shapebootstrap.net/demo/html/corlate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2015 08:01:39 GMT -->
</html>