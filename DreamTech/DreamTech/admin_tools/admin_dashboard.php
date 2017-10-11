
 <?php 
include('db.php'); 
session_start();
if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}

$user = $_SESSION['username'];
$get_img = "select * from admin where username='$user'";

$run_img = mysqli_query($connect, $get_img);
$row_img = mysqli_fetch_array($run_img);

	$c_name = $row_img['admin_name'];
	$c_username = $user;
?>
 
 <html> 
 <head> 
 <link rel="stylesheet" type="text/css" href="admin_dashboard.css"/>
  <link rel="stylesheet" type="text/css" href="viewproducts.css"/>
 </head> 
 
 <body> 

 <div id="sidebar">
	<h2 id="hd">DreamTech</h2>
<div id="welcome">
  <a href="logout.php"><button id="btn">Logout</button></a>

  <h3 id="wel">Welcome,<?php echo" $c_name";?></h3>
</div>

<a href="admin_dashboard.php"><button id="btn1">View Dashboard</button> 
 <div id="actions">
 <h3 id="ac">Actions</h3>
 <ul> 

 <li><a href="admin_dashboard.php?editproducts">Edit Products</a></li> 
 <li><a href="admin_dashboard.php?manageorders">Manage orders</a></li> 
 <li><a href="admin_dashboard.php?addcat">Add catergory</a></li> 
 <li><a href="admin_dashboard.php?addbrands">Add Brands</a></li> 
 <li><a href="admin_dashboard.php?viewusers">View Users</a></li> 
 <li><a href="admin_dashboard.php?viewtransaction">View Transactions</a></li>
<li><a href="admin_dashboard.php?addproducts">Add products</a></li> 
<li><a href="admin_dashboard.php?addadmins"> Add Admins</a></li>
<li><a href="admin_dashboard.php?manage_admins">Manage Admins</a></li>

</ul>

 </div> 
 
 </div>
<div id="content"> 
<?php 

	if(!isset($_GET['editproducts'])){
		if(!isset($_GET['manageorders'])){
			if(!isset($_GET['addcat'])){
				if(!isset($_GET['viewusers'])){
					if(!isset($_GET['viewtransaction'])){
						if(!isset($_GET['addproducts'])){
							if(!isset($_GET['viewproducts'])){
								if(!isset($_GET['addbrands'])){
									if(!isset($_GET['addadmins'])){
										if(!isset($_GET['pro_id'])){
											if(!isset($_GET['del_product'])){
												if(!isset($_GET['manage_admins'])){
													if(!isset($_GET['view_details'])){
														if(!isset($_GET['order_details'])){
															if(!isset($_GET['archived_orders'])){
																if(!isset($_GET['arc_order_details'])){
																	if(!isset($_GET['del_order'])){
																		if(!isset($_GET['user_orders'])){
																
								include ("welcomeadmin.php");
								
	
	} } } } } } } }}}}}}}}}}}
if(isset($_GET['addadmins'])){
	include ("addadmins.php");
}
if(isset($_GET['editproducts'])){
	include ("viewproducts.php");
}
if(isset($_GET['pro_id'])){
	include ("edit_single_pro.php");
	
}
if(isset($_GET['addproducts'])){
	include("InsertProducts.php");
}
if(isset($_GET['addcat'])){
	include("addcat.php");
}
if(isset($_GET['addbrands'])){
	include("addbrand.php");
}
if(isset($_GET['viewusers'])){
	include("viewusers.php");
}
if (isset($_GET['manage_admins'])){
	include("manage_admins.php");
	
}
if (isset($_GET['view_details'])){
	include("view_user_details.php");
	
}
if(isset($_GET['manageorders'])){
	include("manageorders.php");
}
if(isset($_GET['order_details'])){
	include("order_details.php");
}
if(isset($_GET['archived_orders'])){
	include("archived_orders.php");
}
if(isset($_GET['arc_order_details'])){
	include("arc_order_details.php");
}
if(isset($_GET['viewtransaction'])){
	include("view_transactions.php");
}
if(isset($_GET['del_order'])){
	include("delorder.php");
}
if(isset($_GET['user_orders'])){
	include("view_user_orders.php");
}
?>

	
	</div>


 
 
 </body>
 
 
 </html> 