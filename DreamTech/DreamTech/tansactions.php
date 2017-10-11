<?php 
session_start();

include("db.php");
if(isset($_GET['process'])){
	$ip = getIp();
	$email = $_SESSION['customer_email'];
	
	$sel_price = "SELECT * FROM cart WHERE ip_add='$ip' AND customer_email='$email' ";
	$run_price = mysqli_query($connect, $sel_price);
	
	while($p_price = mysqli_fetch_array($run_price)){
		$pro_id = $p_price['p_id'];
		$pro_price = "SELECT * FROM products where product_id='$pro_id'";
		$run_pro_price = mysqli_query($connect,$pro_price);
		while($pp_price = mysqli_fetch_array($run_pro_price)){
			$product_price = array($pp_price['product_price']);
			
			$product_title = $pp_price['product_title'];
			$product_image = $pp_price['product_image'];
			$single_price = $pp_price['product_price'];
			
			$values = array_sum($product_price);
			$total += $values;
	
	
}



?>
