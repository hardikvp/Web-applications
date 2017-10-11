<?php
include("db.php");
function getProducts(){
	global $connect;
	
	$get_product = "SELECT * FROM products";
	$run_product= mysqli_query($connect,$get_product);
	while($row_product= mysqli_fetch_array($run_product)){
		$pro_id = $row_product['product_id'];
		$pro_cat = $row_product['product_cat'];
		$pro_brand = $row_product['product_brand'];
		$pro_title = $row_product['product_title'];
		$pro_price = $row_product['product_price'];
		$pro_image = $row_product['product_image'];
		
		echo " 
		<style>
		a,a:visited{
			text-decoration:none;
			color:black;
		}
		button{
			padding:.8em;
			background-color:#4CAF50;
			color:white;
			border-radius:5em;
			
		}
		</style>
		<div id='single_product'>
				
				<a href='productpage.php?pro_id=$pro_id'><img src='images/product_images/$pro_image' width='120' height='120' />
				<h3>$pro_title</h3></a>
				<p>$<b> $pro_price</b></p>
				<a href='shop.php?add_cart=$pro_id'><button>Add to Cart</button></a>
				</div> 
				
				";
	}
	
}
?>