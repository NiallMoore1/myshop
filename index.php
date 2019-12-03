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
						<img id="logo" src="images/image-11.jpeg"/>
						<img id="banner" src="images/image-22.jpeg"/>
					</div>
<!--/header-->
<!--navbar-->
							<div class="menubar">
								<ul id="menu">
									<li><a href="#">Home</a></li>
									<li><a href="#">All Products</a></li>
									<li><a href="#">My Account</a></li>
									<li><a href="#">Sign Up</a></li>
									<li><a href="#">Shopping Cart</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
								
<!--search box-->
									<div id="form">
										<form method="get" action="result.php" enctype="multipart/form-data">
										<input type="text" name="user-query" placeholder="search a product"/>
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
								<div id="products_box">
									<?php getPro(); ?>
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