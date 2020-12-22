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
								
		    
		</div>     
		<div class="content_wrapper">


	<div id="sidebar"> 
		<div id="sidebar_title">Categories</div>
			<ul id="cats">
				
				<?php getCats(); ?>

		</ul>

		<div id="sidebar_title">Brands</div>
			<ul id="cats">
				
				<?php getBrands(); ?>


		</ul> 
	</div>

	<div id="content_area"> 

		<?php cart(); ?>

		<div id="shoping_cart">
			<span style="float:right;color:white;font-size:18px;padding:5px;line-height:40px;"> welcome Guest
				<b style="color:yellow">shopping cart -</b>Total Items: <?php total_items(); ?> Total price: <?php total_price(); ?> <a href="cart.php" style="color:yellow">Goto Cart</a>

			</span>


		</div>
		

		
		<div id="product_box">
			
			<?php 

			if(!isset($_SESSION['customer_email'])){

				include("customer_login.php");
			}
			else
			{
				include("payment.php");
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
