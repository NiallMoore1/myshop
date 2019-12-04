<?php
$con =mysqli_connect("localhost","root","","ecommerce");

//getting the categories

function getCats(){
				global $con;
				$get_cats = "select * from categories";
				$run_cats = mysqli_query($con, $get_cats);
//open mine    
                while ($row_cats=msqli_fetch_array($run_cats)) {
				$cat_id =$row_cats['cat_id'];
				$cat_title = $row_cats['cat_title'];
				
				echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
				}
//close mine
/*
//open Richie
				foreach($run_cats as $cats)
				{
					echo "<option value=".$cats['cat_id'].">".$cats['cat_title']."</option>";
				}
				return $run_cats; 	
			}
*/
//Close Richie

//getting the brands

function getBrands(){
						global $con;
						
						$get_brands = "select * from brands";
						
						$run_brands = mysqli_query($con, $get_brands);
//start mine
						while ($row_brands=msqli_fetch_array($run_brands)) {
						$brand_id =$row_brands['brand_id'];
						$brand_title = $row_brands['brand_title'];
						
						echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
						}
//end Mine	
//start richie
	/*
						foreach($run_brands as $brands)
						{
							echo "<option value=".$brands['brand_id'].">".$brands['brand_title']."</option>";
						}
						
						return $run_brands;
						
					}
	*/
//end richie

function getpro () {
	
	if(!isset($_GET['cat'])) {
		
		if(!isset($_GET['brand'])) {
		
	global $con;
	
	$get_pro = "select * from products order by RAND() LIMIT 0,6";
	$run_pro = mysqli_query($con, $get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		
			$pro_id = $row_pro['product_id'];
			$pro_cat = $row_pro['product_cat'];
			$pro_brand = $row_pro['product_brand'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			
			echo "
				<div id='single_product'>
					<h3>$pro_title</h3>
					<img src='admin_area/product_image/$pro_image' width='180' height='180'/>
					
					<p>
						<b>€ $pro_price</b>
					</p>
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
					<a href='index.php?pro_id=$pro_id'><button style='float:right;'>Add To Cart</button></a>
				</div>
			";
	}
	}

}
}
?>