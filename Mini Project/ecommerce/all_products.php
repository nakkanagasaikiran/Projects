<!DOCTYPE>
<?php
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
 					</form> -->
								
		     
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

		<div id="shoping_cart">
			<span style="float:right;color:white;font-size:18px;padding:5px;line-height:40px;"> welcome Guest
				<b style="color:yellow">shopping cart -</b>Total Items:Total price:<a href="cart.php" style="color:yellow">Goto Cart</a>

			</span>


		</div>
		
		<div id="product_box">
			
		<?php

	$get_pro="select * from products ";
	$run_pro=mysqli_query($con,$get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id=$row_pro['product_id'];
		$product_cat=$row_pro['product_cat'];
		$pro_brand=$row_pro['product_brand'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		
		echo "
			<div id='single_product'>
			<h3>$pro_title</h3>
			<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
			<p><b> $pro_price</b></P>

			<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>


			<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>

			</div>
			";



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
