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
										Welcome Guest! <b style="color:yellow;">Shopping Cart</b>Total Items:  <?php total_items();?>  Total Price: <?php total_price(); ?> <a href="cart.php" style ="color:yellow;">Go To Cart</a>
									</span>
						
								</div>
								
								


<!--Adding Go To Cart-->
									<div id="products_box">
										<form action="" method="post" enctype="multipart/form-data">
											<table align="center" width="700" bgcolor="skyblue">
												<tr align="center">
													<th>Remove</th>
													<th>Product(s)</th>
													<th>Quantity</th>
													<th>Total Price</th>
												</tr>
												
												<?php 
												$total = 0;
													
													global $con; 
													
													$ip = getIp(); 
													
													$sel_price = "select * from cart where ip_add='$ip'";
													
													$run_price = mysqli_query($con, $sel_price); 
													
													while($p_price=mysqli_fetch_array($run_price)){
														
														$pro_id = $p_price['p_id']; 
														
														$pro_price = "select * from products where product_id='$pro_id'";
														
														$run_pro_price = mysqli_query($con,$pro_price); 
														
														while ($pp_price = mysqli_fetch_array($run_pro_price)){
														
														$product_price = array($pp_price['product_price']);
														
														$product_title = $pp_price['product_title'];
														
														$product_image = $pp_price['product_image'];
														
														$single_price = $pp_price['product_price'];
														
														$values = array_sum($product_price);
														
														$total +=$values;
														
														?>

												<tr align="center">
													<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
													<td><?php echo $product_title; ?><br>
													<img src="admin_area/product_images/<?php echo $product_image;?>" width="60" height="60"/></td>
													<td><input type="text" size="4" name="qty"/></td>
													<td><?php echo "€". $single_price; ?></td>
												</tr>
													<?php }}?>
												<tr>
													<td colspan="4" align="right"><b>Sub Total:</b></td>
													<td><?phpecho "€". $total;?></td>
												</tr>
											</table>
										</form>	
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