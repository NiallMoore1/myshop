<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
    <head>
        <title> Myshop </title>
		<link rel="stylesheet" href="styles/style.css" media="all">
    </head>
<!--main container-->
			<body>
				<div class="main_wrapper">
<!--header-->
					<div class="header_wrapper">
						<a href="index.php"><img id="logo" src="images/image-11.jpeg"/></a>
						<img id="banner" src="images/image-22.jpeg"/>
					</div>
<!--/header-->
<!--navbar-->
							<div class="menubar">
								<ul id="menu">
									<li><a href="index.php">Home</a></li>
									<li><a href="all_products.php">All Products</a></li>
									<li><a href="customer/my_account.php">My Account</a></li>
									<li><a href="#">Sign Up</a></li>
									<li><a href="cart.php">Shopping Cart</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
								
<!--search box-->
									<div id="form">
										<form method="get" action="results.php" enctype="multipart/form-data">
										<input type="text" name="user_query" placeholder="search a product"/>
										<input type="submit" name="search" value="search"/>
										</form>
									</div>
							</div>
<!--/search box-->
							
								<div class="content_wraper">
									<div id="sidebar">
										<div id="sidebar-title">Categories</div>
											<ul id="cats">
												<?php getCats(); ?>
											</ul>
										
										<div id="sidebar-title">Brands</div>
											<ul id="cats">
												<?php getBrands(); ?>
												
											</ul>
									    </div>
								
							<div id="content_area"> 
							
							<?php cart(); ?>
							
								<div id="shopping_cart">
<!--Adding Shopping Cart-->			<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
										 
										<?php
											if(isset($_SESSION['customer_email'])){
												
												echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>";
											}
											
											else {
												echo "<b>Welcome Guest:</b>";
											}
										
										  ?>
										<b style="color:yellow;">Shopping Cart</b>Total Items:  <?php total_items();?>  Total Price: <?php total_price(); ?> <a href="cart.php" style ="color:yellow;">Go To Cart</a>
									</span>
						
								</div>
								
								
<!--checkout page code-->


									<div id="products_box">
									<?php
									if(!isset($_SESSION["customer_email"])){
										
										include("customer_login.php");
									}

										else{
											
										include("payment.php");	
											
										}
										?>
								</div>
							</div>
						</div>
					
				</div>
<!--/navbar-->		
<!--sidebar-->	
				
			<div id="footer">
								<h2 style="text-align:center; padding-top:30px;">&copy; 2019</h2>
								</div>
					</footer>
			
			</body>
			
		
</html> 