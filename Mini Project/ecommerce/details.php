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

		<img id="logo" src="images/logo.jpg" />
		<img id="add" src="images/add.jpg" />
		
	</div>

	<!--header ends-->


		<div class="menubar">
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">SignUp</a></li>
				<li><a href="#">Shopping Cart</a></li>
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

		<div id="shoping_cart">
			<span style="float:right;color:white;font-size:18px;padding:5px;line-height:40px;"> welcome Guest
				<b style="color:yellow">shopping cart -</b>Total Items:Total price:<a href="cart.php" style="color:yellow">Goto Cart</a>

			</span>


		</div>
		
		

		<?php

		if(isset($_GET['pro_id'])) {

			$product_id=$_GET['pro_id'];


			$get_pro="select * from products where product_id='$product_id'";
		
	$run_pro=mysqli_query($con,$get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id=$row_pro['product_id'];
		
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		$pro_desc=$row_pro['product_desc'];

		echo "
			<div id='single_product'>
			<h3>$pro_title</h3>
			<img src='admin_area/product_images/$pro_image' width='400' height='300'/>
			<p><b> $pro_price</b></P>

			<p>$pro_desc</p>

			<a href='index.php' style='float:left;'>Go Back</a>


			<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>

			</div>
			";



	}
}
?>

		
		


	</div>

</div>

	<div id="footer">
		<h2 style="text-align:center;padding-top:30px;">&copy; www.nagasaikiran.com


</div>
	





</div>


</body>
</html>
