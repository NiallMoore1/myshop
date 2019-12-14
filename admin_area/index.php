<!DOCTYPE>
<html>
	<head>
		<title>This Is Admin Panel</title>
		<link rel="stylesheet" href="styles/style.css" media="all"></link>
	</head>
	
<body>

	<div class="main_wrapper">
	
	
		<div id="header"></div>
		
			<div id="right">
				<h2 style="text-align:center; color:gold;">Manage Content</h2>
				
					<a href="index.php?insert_product">Insert New Product</a>
					<a href="index.php?view_products">View All Products</a>
					<a href="index.php?insert_cat">Insert New Categories</a>
					<a href="index.php?view_cats">View All Categories</a>
					<a href="index.php?insert_brand">Insert New Brand</a>
					<a href="index.php?view_brands">View All Brands</a>
					<a href="index.php?view_customers">View Customers</a>
					<a href="index.php?view_orders">View Orders</a>
					<a href="index.php?view_payments">View Payments</a>
					<a href="logout.php">Admin Logout</a>
					
			
			
			
			
			
			</div>
			
			
			
			
			
			
			
			<div id="left">
			<?php 
		if(isset($_GET['insert_product'])){
		
		include("insert_product.php"); 
		
		}
		
		if(isset($_GET['view_products'])){
		
		include("view_products.php"); 
		
		}
		
		if(isset($_GET['edit_pro'])){
		
		include("edit_pro.php"); 
		
		}
		
		if(isset($_GET['insert_cat'])){
		
		include("insert_cat.php"); 
		
		}
		
		if(isset($_GET['view_cats'])){
		
		include("view_cats.php"); 
		
		}
		
		if(isset($_GET['edit_cat'])){
		
		include("edit_cat.php"); 
		
		}
		
		
		
		
		?>
			</div>
	</div>

</body>
</html>