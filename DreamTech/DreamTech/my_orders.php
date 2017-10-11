
<link rel="stylesheet" type="text/css" href="orders.css"/>
<?php include_once("db.php");?>
<table align="center"> 
<tr>
<th colspan="7"><center> <h2>Your Orders</h2></center></th>
<tr> 
<th> Order Number: </th> 
<th> Order Status: </th>
 <th> Product Title: </th>
<th> Product Price: </th> 
<th>  Quantity: </th>  
<th> Shipping Address: </th>
<th> Comments: </th>
</tr>
<?php 
$user = $_SESSION['customer_email'];
$get_users = "SELECT * FROM orders where customer_email ='$user'";
	$run_users= mysqli_query($connect,$get_users);
	while($row_img= mysqli_fetch_array($run_users)){

	$order_id = $row_img['order_id'];
	$order_status = $row_img['order_status'];
	$product_title = $row_img['product_title'];
	$product_price = $row_img['product_price'];
	$ordered_qty = $row_img['ordered_qty'];
	$cust_add = $row_img['cust_add'];
	$cust_city = $row_img['cust_city'];
	$cust_state = $row_img['cust_state'];
	$cust_zip = $row_img['cust_zip'];
	$cust_country = $row_img['cust_country'];
	$customer_comments = $row_img['cust_comments'];
?>
<tr> 
<td><?php echo $order_id;?></td>
<td><?php echo $order_status;?></td>
<td><?php echo $product_title;?></td>
<td><?php echo "$ ".$product_price;?></td>
<td><?php echo $ordered_qty;?></td>
<td><?php echo $cust_add."<br/> ".$cust_city.", ".$cust_state." ".$cust_zip."<br/>".$cust_country;?></td>
<td><?php echo $customer_comments;?></td>
</tr>
	<?php }?>
</table> 
