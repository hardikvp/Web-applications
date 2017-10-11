<?php 

include ("db.php");
if(mysqli_connect_errno()){
	echo "The Connection to Database Failed".mysqli_connect_error();
}
function getIp(){
global $connect;
        $ip = $_SERVER['REMOTE_ADDR'];     
        if($ip){
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            return $ip;
        }
        
    }
function cart(){
	global $connect;
	if(isset($_GET['add_cart']))
	{
		$ip = getIp();
		
		$pro_id = $_GET['add_cart'];
		$check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id'";
		$run_check = mysqli_query($connect, $check_pro);
		
		if(mysqli_num_rows($run_check)>0){
			
			$check_qty = "select qty from cart where ip_add='$ip' AND p_id='$pro_id'";
			$db_run = mysqli_query($connect, $check_qty);
			while($row_product= mysqli_fetch_array($db_run)){
				$db_qty = $row_product['qty'];
			}
			$actual_qty = (int)$db_qty + 1;
			$update_query = "UPDATE cart SET qty='$actual_qty' WHERE ip_add='$ip' AND p_id='$pro_id'";
				$run_q = mysqli_query($connect, $update_query);
			
				
				
		}
		else{
		
		$insert_pro = "insert into cart (p_id, ip_add, qty) values ('$pro_id','$ip', '1')";
		$run_pro = mysqli_query($connect, $insert_pro);
		echo "<script> window.open('shop.php','_self')</script>";
		}
}
}
function total_item(){
	global $connect;
if(isset($_GET['add_cart'])){
	
	$ip = getIp();
	$get_items = "select * from cart where ip_add='$ip'";
	$run_items = mysqli_query($connect, $get_items);
	$count_items = mysqli_num_rows($run_items);
}
else{
	$ip = getIp();
	$get_items = "select * from cart where ip_add='$ip'";
	$run_items = mysqli_query($connect, $get_items);
	$count_items = mysqli_num_rows($run_items);
}
	echo $count_items;
}
function total_price(){
	$total = 0;
	global $connect;
	$ip = getIp();
	$sel_price = "SELECT * FROM cart WHERE ip_add='$ip'";
	$run_price = mysqli_query($connect, $sel_price);
	
	while($p_price = mysqli_fetch_array($run_price)){
		$pro_id = $p_price['p_id'];
		$pro_price = "SELECT * FROM products where product_id='$pro_id'";
		$run_pro_price = mysqli_query($connect,$pro_price);
		while($pp_price = mysqli_fetch_array($run_pro_price)){
			$product_price = array($pp_price['product_price']);
			$values = array_sum($product_price);
			$total += $values;
		}
		}
		echo "$" . $total;
}
	
?>