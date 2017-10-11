
<link rel="stylesheet" type="text/css" href="Insert.css"/>
<link rel="stylesheet" type="text/css" href="Addcat.css"/>
<link rel="stylesheet" type="text/css" href="viewUsers.css"/>
<title>Archived Orders</title>
<?php include("db.php");


if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}?>


<div id="contentr">
<center><h1>You Are Currently in Admin Area. </h1></center>
<form method="post" action="" enctype="multipart/form-data" > 
</form>
</div>
<div id="content2">
<table>
<tr>
<th colspan="8"><h2> Below are the Achived orders</h2></th>
</tr>
<tr> 
<th>Order ID</th>
<th>Transaction ID</th> 
<th>Customer</th>
<th>Order Status</th>
<th>Ordered Product</th>
<th>Quantity</th>
<th>Total</th>
</tr>
<center>
<?php 

$get_users = "SELECT * FROM ordersarchive ";
	$run_users= mysqli_query($connect,$get_users);
	while($row_img= mysqli_fetch_array($run_users)){

	$order_id = $row_img['order_id'];
	$cust_email = $row_img['customer_email'];
	$transaction_id= $row_img['trasaction_id'];
	$order_status = $row_img['order_status'];
	$product_title = $row_img['product_title'];
	$product_price = $row_img['product_price'];
	$product_total = $row_img['product_total'];
	$ordered_qty = $row_img['ordered_qty'];
	$cust_add = $row_img['cust_add'];
	$cust_city = $row_img['cust_city'];
	$cust_state = $row_img['cust_state'];
	$cust_zip = $row_img['cust_zip'];
	$cust_country = $row_img['cust_country'];
	$customer_comments = $row_img['cust_comments'];

		
		echo "
		<style>
		#del{
			padding-top:.5em;
			padding-bottom:.5em;
			padding-right:1.5em:
			padding-left:1.5em;
			background-color:#FF0000;
			color:white;
			border-radius:4em;
			margin-top:.5em;
			
		}
		#normal{
			padding-top:.5em;
			padding-bottom:.5em;
			padding-right:1.5em:
			padding-left:1.5em;
			background-color:#4CAF50;
			color:white;
			border-radius:4em;
			
		}
		td{
			text-align:center;
		}
		</style>
		
		<tr>
		<td>$order_id</td>
		<td>$transaction_id</td>
		<td>$cust_email</td> 
		<td>$order_status</td>
		<td>$product_title</td>
		<td>$ordered_qty</td>
		<td>$product_total</td>
		
		<td>
		<a href='admin_dashboard.php?arc_order_details=$order_id'><button id='normal'>Order Details</button></a>
		
		
		
		</td>
		</tr>
		";
	}
?>
</center>
</table> 
</div>
 

