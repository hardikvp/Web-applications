
<link rel="stylesheet" type="text/css" href="Insert.css"/>
<link rel="stylesheet" type="text/css" href="Addcat.css"/>
<link rel="stylesheet" type="text/css" href="viewUsers.css"/>

<?php include("db.php");


if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}?>

<body> 
<div id="contentr">
<center><h1>You are currenty in Admin Area, you may view/remove customer using this form</h1></center>
<form method="post" action="" enctype="multipart/form-data" > 
</form>
</div>
<div id="content2">
<table>
<tr>
<th colspan="5"><h2> Below are current customers in the database.</h2></th>
</tr>
<tr>
<th colspan="5"><h3> For security reasons passwords are not listed.</h3></th>
</tr>
<tr> 
<th>Customer ID</th>
<th>Customer name</th>
<th>Customer email</th>
<th>Customer contact</th>
<th>Actions</th>
</tr>
<center>
<?php
$get_users = "SELECT * FROM customers";
	$run_users= mysqli_query($connect,$get_users);
	while($row_users= mysqli_fetch_array($run_users)){
		$cust_id = $row_users['customer_id'];
		$cust_name = $row_users['customer_name'];
		$cust_email = $row_users['customer_email'];
		$cust_country = $row_users['customer_country'];
		$cust_city = $row_users['customer_city'];
		$cust_contact = $row_users['customer_contact'];
		$cust_add = $row_users['customer_add'];
		$cust_image = $row_users['customer_image'];
		
		
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
		<td>$cust_id</td>
		<td>$cust_name</td>
		<td>$cust_email</td> 
		<td>$cust_contact</td>
		<td>
		<a href='admin_dashboard.php?view_details=$cust_id'><button id='normal'>View Details</button></a>
		
		<a href='admin_dashboard.php?user_orders=$cust_email'><button id='normal'>View Orders</button></a>
		<a href='deluser.php?cust_id=$cust_id'><button id='del'>Delete User</button></a>
		</td>
		</tr>
		";
	}
?>
</center>
</table> 
</div>
 

