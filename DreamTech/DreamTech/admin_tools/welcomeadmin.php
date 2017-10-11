<?php 

if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}?>
<link rel="stylesheet" type="text/css" href="welcomeadmin.css"/>
<div id="admpanel"> 
<center><h1>Welcome to the Admin Panel. This is your Dashboard.</h2></center> 
<br/> 
<div id="dashbox"> 


		
			<div id='single_product'>
				
				<a href='admin_dashboard.php?addproducts'><img src='images/add-products.png' width='120' height='120' />
				<h3>Add Products</h3></a>
				
				</div>
				<div id='single_product'>
				
				<a href='admin_dashboard.php?editproducts'><img src='images/edit-products.png' width='120' height='120' />
				<h3>Edit Products</h3></a>
				
				</div>
				<div id='single_product'>
				
				<a href='admin_dashboard.php?manageorders'><img src='images/manage-orders.png' width='120' height='120' />
				<h3>Manage Orders</h3></a>
				
				</div>
				<div id='single_product'>
				
				<a href='admin_dashboard.php?addbrands'><img src='images/add-brand.png' width='120' height='120' />
				<h3>Add Brands</h3></a>
				
				</div>
				<br/>
				
				
				
				<div id='single_product'>
				
				<a href='admin_dashboard.php?addcat'><img src='images/add-cat.png' width='120' height='120' />
				<h3>Add Categories</h3></a>
				
				</div>
				
				<div id='single_product'>
				
				<a href='admin_dashboard.php?viewtransaction'><img src='images/transaction-icon.png' width='120' height='120' />
				<h3> Transactions</h3></a>
				
				</div>
				
				<div id='single_product'>
				
				<a href='admin_dashboard.php?viewusers'><img src='images/users-icon.png' width='120' height='120' />
				<h3>View Users</h3></a>
				
				</div>
				<div id='single_product'>
				
				<a href='admin_dashboard.php?addadmins'><img src='images/admin-icon.png' width='120' height='120' />
				<h3>Add Admins</h3></a>
				
				</div>
				<br /> 
				
				

</div> 