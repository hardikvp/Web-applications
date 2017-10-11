
<link rel="stylesheet" type="text/css" href="Insert.css"/>
<link rel="stylesheet" type="text/css" href="Addcat.css"/>
<link rel="stylesheet" type="text/css" href="viewUsers.css"/>
 
<title>View Transactions</title>
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
<th colspan="8"><h2> Below Are The Transactions</h2></th>
</tr>
<tr> 

<th>Transaction ID</th> 
<th>Transaction Date</th>
<th>Customer Email</th>
<th>Payment Method</th>
<th>Total Quantity</th>
<th>Grand Total</th>
<th>Customer Billing</th>
</tr>
<center>
<?php 

$get_transactions = "SELECT * FROM transactions ";
	$run_transactions= mysqli_query($connect,$get_transactions);
	while($row_img= mysqli_fetch_array($run_transactions)){
	$cust_email = $row_img['customer_email'];
	$transaction_id= $row_img['trasaction_id'];
	$transaction_date = $row_img['transaction_date'];
	$payment_method = $row_img['method_pay'];
	$total_price = $row_img['total_price'];
	$total_qty = $row_img['total_qty'];
	$cust_add = $row_img['cust_add'];
	$cust_city = $row_img['cust_city'];
	$cust_state = $row_img['cust_state'];
	$cust_zip = $row_img['cust_zip'];
	$cust_country = $row_img['cust_country'];
	

		
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
		<td>$transaction_id</td>
		<td>$transaction_date</td>
		<td>$cust_email</td> 
		<td>$payment_method</td>
		<td>$total_qty</td>
		<td>$ $total_price</td>
		<td>$cust_add<br/>$cust_city, <br>$cust_state <br>$cust_zip<br/>$cust_country</td>
		</tr>
		";
	}
?>
</center>
</table> 
</div>
 

