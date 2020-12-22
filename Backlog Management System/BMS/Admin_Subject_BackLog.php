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
			 <h2>Subject Wise Backlogs List</h2>
             
			 </p>
             </div>
                
                <div class="row contact-wrap "> 
                <div class="status alert alert-success" style="display: none"></div>
                <form class="contact-form"  method="POST" action="Admin_Subject_BackLog.php" enctype="multipart/form-data">
                   
                    <div class="col-sm-3">
                        
						<div class="form-group">
                            <label>Regulation *</label>
                             <select name="Regulation" class="form-control">
								<option value="None">-- Select Regulation --</option>
								<?php include("dropdown.php"); ?>							  
							 </select>
                        </div>  
                        
                        <div class="form-group">
                            <label>Department *</label>
                             <select name="deptname" class="form-control">
								 <option value="None">-- Select Department --</option>
								 <option value="MCA">MCA</option>
								 <option value="MBA">MBA</option>
							 </select>
                        </div>  
						
						<div class="form-group">
                            <label>AcademicYear *</label>
                             <select name="AcademicYear" class="form-control">
								 <option value="None">-- Select AcademicYear --</option>
								 <option value="2017-2018">2017-2018</option>
								 <option value="2016-2017">2016-2017</option>
								 <option value="2015-2016">2015-2016</option>
								 <option value="2014-2015">2014-2015</option>
							 </select>
                        </div>  
						
						<div class="form-group">
                            <label>Subject Code *</label>
                            <input type="text" name="subjectcode" class="form-control" required="required">
                        </div>

                           						
                        <div class="form-group">
                            <center><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Search</button></center>
                        </div>
                    </div>
					
					<!--Next Coloumn -->
					
					 <div class="col-sm-8">
                        
						<div class="form-group">
							
						<table class="table">	
					
					
								
  <tr>
  <td> <label>Regulation </label> </td>
  
  <td> <label>DeptName </label> </td>
  
  <td> <label>Semester </label> </td>
  
  <td> <label>AcademicYear </label> </td>
  
  <td> <label>Subject Code </label> </td>
  
  <td> <label>Subject Name </label> </td>
 
  </tr>
  
  
  <?php
    $connection=mysql_connect("localhost","root","");
    mysql_select_db("BMS",$connection);

if(isset($_POST['submit']))
{


	$Deptname = $_POST['deptname'];	
	$SubjectCode = $_POST['subjectcode'];
	$Regulation=$_POST['Regulation'];
	$AcademicYear=$_POST['AcademicYear'];
		
    $query=mysql_query("select DISTINCT Regulation, DeptName, Semester, AcademicYear, SubjectCode, SubjectName from backlogs where DeptName='$Deptname' and SubjectCode='$SubjectCode' and Regulation='$Regulation' and AcademicYear='$AcademicYear'");
   
    $count = mysql_num_rows($query);

if($count > 0)
{
	while($display=mysql_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $display['Regulation'] . "</td>";
echo "<td>" . $display['DeptName'] . "</td>";
echo "<td>" . $display['Semester'] . "</td>";
echo "<td>" . $display['AcademicYear'] . "</td>";
echo "<td>" . $display['SubjectCode'] . "</td>";
echo "<td>" . $display['SubjectName'] . "</td>";
echo "</tr>";
}
	
}
else
{
	echo "No Data";

}

}
mysql_close();

?>

</table>
										
<br>
			
    <table class="table">		
    <tr>
    
  <td> <label>Roll No </label> </td>
  
  <td> <label>Name</label> </td>
  
  </tr>
  
<?php
    $connection=mysql_connect("localhost","root","");
    mysql_select_db("BMS",$connection);
    
if(isset($_POST['submit']))
{
    
	$Deptname = $_POST['deptname'];	
	$SubjectCode = $_POST['subjectcode'];
	$Regulation=$_POST['Regulation'];
	$AcademicYear=$_POST['AcademicYear'];
		
   $query=mysql_query("select * from backlogs where DeptName='$Deptname' and subjectcode='$SubjectCode' and Regulation='$Regulation' and AcademicYear='$AcademicYear'");
   
    $count = mysql_num_rows($query);

if($count > 0)
{
	while($display=mysql_fetch_array($query))
{
echo "<tr>";
echo "<td>" . $display['RollNo'] . "</td>";
echo "<td>" . $display['Name'] . "</td>";

echo "</tr>";
}

	
}
else
{
	echo "No Data";

}

}
mysql_close();

?>

</table>
 
 
                        </div>	
                    </div>						
                </form> 
                               
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
              