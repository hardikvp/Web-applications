
<link rel="stylesheet" type="text/css" href="Insert.css"/>
<link rel="stylesheet" type="text/css" href="Addcat.css"/>
<link rel="stylesheet" type="text/css" href="viewUsers.css"/>
<link rel="stylesheet" type="text/css" href="view_user_details.css"/>
<link rel="stylesheet" type="text/css" href="order_details.css"/>
<title>Archived Order Details</title>
<?php include("db.php");


if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}?>

<body> 
<div id="contentr">
<center><h1>You are currenty in Admin Area.</h1></center>
<form method="post" action="" enctype="multipart/form-data" > 
</form>
</div>
<div id="content2">
<table>
<tr>
<th colspan="5"><h2> Below is the Archived Order View.</h2></th>
</tr>

<center>
<?php
$order_id = $_GET['arc_order_details'];
$get_orders = "SELECT * FROM ordersarchive where order_id ='$order_id'";
	$run_orders= mysqli_query($connect,$get_orders);
	while($row_orders= mysqli_fetch_array($run_orders)){
		$order_id = $row_orders['order_id'];
		$transaction_id = $row_orders['trasaction_id'];
		$customer_email = $row_orders['customer_email'];
		$order_status = $row_orders['order_status'];
		$product_title = $row_orders['product_title'];
		$product_price = $row_orders['product_price'];
		$product_total = $row_orders['product_total'];
		$ordered_qty = $row_orders['ordered_qty'];
		$cust_comments = $row_orders['cust_comments'];
		$cust_add = $row_orders['cust_add'];
		$cust_state = $row_orders['cust_state'];
		$cust_city = $row_orders['cust_city'];
		$cust_zip = $row_orders['cust_zip'];
		$cust_country = $row_orders['cust_country'];
		$product_image = $row_orders['product_image'];
		
		
		
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
		<th>Order ID:</th>
		<td>$order_id</td>
		</tr>
		<tr>
		<th>Transaction ID:</th>
		<td><a href='viewtransaction.php?trans_id=$transaction_id'> $transaction_id</a></td>
		</tr>
		<tr>
		<tr>
		<th>Order Status:</th>
		<td>$order_status
		
		</td>
		</tr>
		<th>Customer Email:</th>
		<td>$customer_email</td>
		</tr>
		<tr>
		<th>Porduct Ordered:</th>
		<td><img width='227px' height='222px' src='../images/product_images/$product_image'/><br /> <h3>Product Name: $product_title <br/>Porduct Price: $ $product_price <br /> 
		Ordered Quantity: $ordered_qty <br /> 
		Total Price of the Quantity ordered: $ $product_total</br></h3>
		</td>
		</tr>
		<tr> 
			<td>Customer Comments:</td>
			<td>$cust_comments</td>
		</tr>
		
		</table>
		<table> 
		<tr> 
		<td colspan='2'><h2>Shipping Information</h2></td> 
		</tr> 
		<tr>
		<th> Address:</th>
		<td>$cust_add</td>
		</tr>
		<tr>
		<th> City:</th>
		<td>$cust_city</td>
		</tr>
		<tr>
		<th> State</th>
		<td>$cust_state</td>
		</tr>
		<tr>
		<th> Zip Code:</th>
		<td>$cust_zip</td>
		</tr>
		
		<tr>
		<th> Country</th>
		<td>$cust_country</td>
		</tr>
		
		";
	}
	
?>
</center>
</table> 
</div>

 

