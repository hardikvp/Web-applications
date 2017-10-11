
<div id="paym"> 

<?php
$tot_qty=0;
$get_total = "SELECT * FROM cart";
	$run_product= mysqli_query($connect,$get_total);
	while($row_product= mysqli_fetch_array($run_product)){
		$pro_qty  = $row_product['qty'];
		$tot_qty = $tot_qty + $pro_qty;
	}
	if($tot_qty < 1){
		echo "<h1> Your Cart is Empty </h1>";
		echo "
		
		<style>
		#btn{
			padding:1em;
			border-radius: 4em;
			width:15%;
			color:white;
			background-color:#4CAF50;
			font-size: 16px;
			font-weigth: 2;
			margin-top:2%;
			margin-bottom:2%;
		}
		</style>
		
		<a href='cart.php'><button id='btn'>Go to Cart</button></a> 
		";
	}
	else{
		
	?>
<form action="" method="post" enctype="multipart/form-data" >
<h2 align="center" >Checkout</h2> 
<div id="tb1">
<table> 
<tr> 
<td colspan="2"><h2> Your Billing Info</h2> </td> 
</tr>
<?php
$email_cust = $_SESSION['customer_email'];
$get_cust = "SELECT * FROM customers where customer_email ='$email_cust'";
	$run_cust= mysqli_query($connect,$get_cust);
	while($row_cust= mysqli_fetch_array($run_cust)){
		$name = $row_cust['customer_name'];
		$add = $row_cust['customer_add'];
		$city = $row_cust['customer_city'];
		$country = $row_cust['customer_country'];
		$contact = $row_cust['customer_contact'];
		$state = $row_cust['customer_state'];	
		$zip = $row_cust['customer_zip'];
	}
	echo "
	<tr>
	<td>Your Name:</td>
	<td><input name='name_bill' value='$name'/></td>
	</tr>
	
	<tr>
	<td>Your Address:</td>
	<td><input name='add_bill' value='$add'/></td>
	</tr>
	<tr>
	<td>Your City:</td>
	<td><input name='city_bill' value='$city'/></td>
	</tr>
	<tr>
	<td>Your State:</td>
	<td><input name='state_bill' value='$state'/></td>
	</tr>
	<tr>
	<td>Your zip:</td>
	<td><input name='zip_bill' value='$zip'/></td>
	</tr>
	<tr>
	<td>Your Country:</td>
	<td><input name='country_bill' value='$country'/></td>
	</tr>
	<tr>
	<td>Your Contact:</td>
	<td><input name='contact_bill' value='$contact'/></td>
	</tr>
	
	
	
	
	
	";
?>


	
	</table>
</div>
<div id="tb2">	
	<table id="table"> 
<tr> 
<td colspan="2"><h2> Your Shipping Info</h2> </td> 
</tr> 
<?php
echo "
	<tr>
	<td>Your Name:</td>
	<td><input name='name_ship' value='$name'/></td>
	</tr>
	
	<tr>
	<td>Your Address:</td>
	<td><input name='add_ship' value='$add'/></td>
	</tr>
	<tr>
	<td>Your City:</td>
	<td><input name='city_ship' value='$city'/></td>
	</tr>
	<tr>
	<td>Your State:</td>
	<td><input name='state_ship' value='$state'/></td>
	</tr>
	<tr>
	<td>Your zip:</td>
	<td><input name='zip_ship' value='$zip'/></td>
	</tr>
	<tr>
	<td>Your Country:</td>
	<td><input name='country_ship' value='$country'/></td>
	</tr>
	<tr>
	<td>Your Contact:</td>
	<td><input name='contact_ship' value='$contact'/></td>
	</tr>
	
	
	
	
	
	";
?>
	
	</table>
	</div>
	<div id="comments">
	<table id="comment" align="center" width="80%">
	<tr> 
	<th > 
	Comments: 
	</th>
	<td> <textarea rows="5" id="com" placeholder="Include Your Comments Here" name="commentsbox"></textarea></td>
	</tr>
	</table>
	</div>
	<div id="cartview">
	
		<table id="cartfinal" align="center" width="90%" bgcolor="#eee">
		<tr  align="center"><th colspan="3" ><h2><center>What You will be buying<br/></center></h2></th></tr>
		<tr> 
		
		<th>Product(s)</th>
		<th>Quantity</th>
		<th>Price</th>
		</tr> 
	<?php
		$total = 0;
	global $connect;
	$ip = getIp();
	$sel_price = "SELECT * FROM cart WHERE ip_add='$ip'";
	$run_price = mysqli_query($connect, $sel_price);
	
	while($p_price = mysqli_fetch_array($run_price)){
		$pro_id = $p_price['p_id'];
		$pro_qty = $p_price['qty'];
		$pro_price = "SELECT * FROM products where product_id='$pro_id'";
		$run_pro_price = mysqli_query($connect,$pro_price);
		while($pp_price = mysqli_fetch_array($run_pro_price)){
			$product_price = array($pp_price['product_price']);
			
			$product_title = $pp_price['product_title'];
			$product_image = $pp_price['product_image'];
			$single_price = $pp_price['product_price'];
			$total_sub = $single_price * $pro_qty;
			$total = $total + $total_sub;
			?>
	
	 
	<tr align="center">
		
		<td><a href="productpage.php?pro_id=3">
		<strong>
		<?php echo $product_title; ?></strong></a>
		</td>
		<td>
		<?php echo $pro_qty; ?>
		</td>
		<td><?php echo "$". $total_sub;?></td>
		</tr>
	<?php } } ?>
	<tr align="center">
	<th></th>
	<th id="payable1">Total: <?php
$tot_qty=0;
$get_total = "SELECT * FROM cart";
	$run_product= mysqli_query($connect,$get_total);
	while($row_product= mysqli_fetch_array($run_product)){
		$pro_qty  = $row_product['qty'];
		$tot_qty = $tot_qty + $pro_qty;
		
	}
	 echo $tot_qty; ?></th>
	
	<th id="payable">Amount Payable:  <?php echo "     $". $total;?></th>
	</tr>
	<tr align="center"> 
	<th></th>
	</table> 
	
	</div>
	<div id="payments"> 
	<table id="tb3"> 
	<tr>
	<th><h3 id="paylabel">Payment Method </h3></th>
	<th>
	<select required style="width:100%; border-radius:.7em; padding: 1em;" name="pay_method">
	
	<option value="paypal"> Pay With PayPal (Mock Transaction)</option>
	</select>
	</th>
	</tr>
	<tr> 
	<td id="paypaltd" colspan="2">
	<img id="img" src="images/paypal-logo-11.png"></img>
	</td>
	</tr>
	<tr>
	<td><h3>Total Amount to be Charged:</h3></td>
	<td align="left"> <h3><?php echo "$".$total;?></h3></td></tr>
	<tr>
	<td colspan="2"><input id="btnsub" type="submit" name="order" value="Place Order"/> </td>
	<td></tr>
	
	
	<?php }?>
	</table> 
	</form>
	<?php
	
if(isset($_POST['order'])){
	
	$cust_email = $_SESSION['customer_email'];
	
	$ip = getIp();
	
	$name_ship = $_POST['name_ship'];
	
	$add_ship = $_POST['add_ship'];
	$city_ship = $_POST['city_ship'];
	$state_ship = $_POST['state_ship'];
	$zip_ship = $_POST['zip_ship'];
	$country_ship = $_POST['country_ship'];
	$contact_ship = $_POST['contact_ship'];
	
	$name_bill = $_POST['name_bill'];
	
	$add_bill = $_POST['add_bill'];
	$city_bill = $_POST['city_bill'];
	$state_bill = $_POST['state_bill'];
	$zip_bill = $_POST['zip_bill'];
	$country_bill = $_POST['country_bill'];
	$contact_bill = $_POST['contact_bill'];
	$comments = $_POST['commentsbox'];
	$date = date("l jS F Y h:i:s A");
	
	$pay_method = $_POST['pay_method'];
	
	$query_transaction = "INSERT INTO transactions (customer_email,customer_ip,transaction_date,method_pay,total_qty,total_price, cust_add, cust_city, cust_state, cust_zip,cust_country) VALUES('$cust_email','$ip','$date','$pay_method','$tot_qty','$total','$add_bill','$city_bill','$state_bill','$zip_bill','$country_bill')";
	$run_query = mysqli_query($connect, $query_transaction);
	
	if($run_query){
		$trans_id = mysqli_insert_id($connect);
			
		$total = 0;
	global $connect;
	$ip = getIp();
	$sel_price = "SELECT * FROM cart WHERE ip_add='$ip'";
	$run_price = mysqli_query($connect, $sel_price);
	
	while($p_price = mysqli_fetch_array($run_price)){
		$pro_id = $p_price['p_id'];
		$pro_qty = $p_price['qty'];
		$pro_price = "SELECT * FROM products where product_id='$pro_id'";
		$run_pro_price = mysqli_query($connect,$pro_price);
		while($pp_price = mysqli_fetch_array($run_pro_price)){
			$product_price = array($pp_price['product_price']);
			
			$product_title = $pp_price['product_title'];
			$product_image = $pp_price['product_image'];
			$single_price = $pp_price['product_price'];
			$total_sub = $single_price * $pro_qty;
			$status ="Processed";
			
			$order_query = "INSERT INTO orders
			(trasaction_id, customer_email, order_status, product_title, product_price, product_total, ordered_qty,cust_comments, cust_add, cust_city, cust_state, cust_zip, cust_country,product_image)
			VALUES('$trans_id','$cust_email','$status','$product_title','$single_price','$total_sub','$pro_qty','$comments','$add_ship','$city_ship','$state_ship','$zip_ship','$country_ship','$product_image')";
			$run_order = mysqli_query($connect, $order_query);
			if($run_order){
				$delete_cart = "DELETE FROM cart WHERE ip_add='$ip'";
				$run_delete = mysqli_query($connect, $delete_cart);
				echo "<script>window.open('ordersuccess.php','_self');</script>";
			}
	 } 
	 }
	}
	
	
	
}


?>
	
	</div>
	
</div> 





