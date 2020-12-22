<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
?>


<html>
<head>
<title> my online shop </title>

<link rel="stylesheet" href="styles/style.css" media="all" />



</head>

<body>
	<!--main starts-->

<div class="main_wrapper">
	<!--header starts-->

	<div class="header_wrapper">

		<a href="index.php"><img id="logo" src="images/logo.jpg" />
		<img id="add" src="images/add.jpg" />
		
	</div>

	<!--header ends-->


		<div class="menubar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">SignUp</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>

			<!--<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placholder="search a product"/>
					<input type="submit" name="search" value="search"/>
 					</form>-->
								
		     
		</div>     
		<div class="content_wrapper">


	<div id="sidebar"> 
		<div id="sidebar_title">My Account</div>
			<ul id="cats">

				<?php

				$user=$_SESSION['customer_email'];

				$get_img="select * from customers where customer_email='$user'";

				$run_img=mysqli_query($con, $get_img);

				$row_img=mysqli_fetch_array($run_img);

				$c_image=$row_img['customer_image'];

				$c_name=$row_img['customer_name'];

				echo "<img src='customer_images/$c_image' width='150' height='200'/>";


				?>				

				<li><a href="my_account.php?my_orders">My Orders</a></li>
				<li><a href="my_account.php?edit_account">Edit Account</a></li>
				<li><a href="my_account.php?change_pass">Change Password</a></li>
				<li><a href="my_account.php?delete_account">Delete Account</a></li>


		</ul>
	</div>

		

	<div id="content_area"> 

		<?php cart(); ?>

		<div id="shoping_cart">
			<span style="float:right;color:white;font-size:16px;padding:5px;line-height:40px;"> 

				<?php
				if(isset($_SESSION['customer_email']))
				{

					echo "<b>Welcome:</b>". $_SESSION['customer_email'];

				}


				?>

				
				
				<?php
				if(!isset($_SESSION['customer_email'])){

					echo "<a href='checkout.php' style='color:red'>Login</a>";
				}

				else{

					echo "<a href='logout.php' style='color:red'>Logout</a>";
				}


				?>

			</span>


		</div>
		

		
		<div id="product_box">

			

			<?php
			if(!isset($_GET['my_orders'])){
				if(!isset($_GET['edit_account'])){
					if(!isset($_GET['change_pass'])){
						if(!isset($_GET['delete_account'])){
			echo "

			<h2 style='padding: 20px;'>Welcome: $c_name </h2>";
		
		}
		}
		}
        }
		?>

		<?php
		if(isset($_GET['edit_account'])){

			include("edit_account.php");

		}

		if(isset($_GET['change_pass'])){

			include("change_pass.php");

		}

		?>
			
		</div>


	</div>

</div>

	<div id="footer">
		<h2 style="text-align:center;padding-top:30px;">&copy; www.nagasaikiran.com


</div>
	





</div>


</body>
</html>
