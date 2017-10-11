 
 <?php include("getProducts.php");
 session_start();
 if(!isset($_SESSION['customer_email'])){
	 echo "<script>window.open('login.php','_self');</script>";
	 }
 ?>

 <html> 
<head>
	<title>My Account</title> 
	<link rel="stylesheet" type="text/css" href="Login.css"/> 
	<link rel="stylesheet" type="text/css" href="Index.css"/>
	<link rel="stylesheet" type="text/css" href="Shop.css"/>
	<link rel="stylesheet" type="text/css" href="myaccount.css"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

	<script>
	jQuery(document).ready(function($){
	var path = window.location.pathname.split("/").pop();
	
	if (path == ''){
		path = 'index.php';
		
	}
	var target = $('#Navigation a[href="'+path+'"]');
	target.addClass('active');
});
	</script>
</head> 

<body> 
<div id="nav">
<?php include'navigation.php'; ?>
</div>

<div id ="main"> 
<?php include'cust_sidebar.php'?>

<div class="wrapper">


	<div id="content">
	<?php cart(); ?>
	<div id="welcomebar">
	<?php 
if(isset($_SESSION['customer_email'])){
$user = $_SESSION['customer_email'];
$get_img = "select * from customers where customer_email='$user'";

$run_img = mysqli_query($connect, $get_img);
$row_img = mysqli_fetch_array($run_img);
$c_name = $row_img['customer_name'];

echo "<b id='h4'>Welcome! $c_name </b>";
}
?>

	</div>
	<div id="products_box">
	<div id ="accpage">
	<?php
	
	if(!isset($_GET['edit_account'])){
		if(!isset($_GET['my_orders'])){
			if(!isset($_GET['change_pass'])){
				if(!isset($_GET['del_account'])){
					if(!isset($_GET['editname'])){
						if(!isset($_GET['editEmail'])){
							if(!isset($_GET['editaddress'])){
								if(!isset($_GET['editcity'])){
									if(!isset($_GET['editcountry'])){
										if(!isset($_GET['editcontact'])){
											if(!isset($_GET['editimage'])){
												if(!isset($_GET['editzip'])){
													if(!isset($_GET['editstate'])){
echo "<h2> Hello! $c_name. This is you account page.</h2>";
echo "<br /> <br/> <br/><br/><br />";
	echo "<h3> <<====== Click on one the actions You would like to perfom </h3>";
	}}}}}}}}}}}}}
	if(isset($_GET['my_orders'])){
		
		include ("my_orders.php");
	}
	if(isset($_GET['edit_account'])){
		include ("edit_account.php");
	}
	if(isset($_GET['change_pass'])){
		include ("change_pass.php");
		
	}
	
	if(isset($_GET['editname'])){
		include ("editname.php");
	}
	if(isset($_GET['editEmail'])){
		include ("editEmail.php");
	}
	if(isset($_GET['editaddress'])){
		include ("editaddress.php");
	}
	if(isset($_GET['editcity'])){
		include ("editcity.php");
	}
	if(isset($_GET['editcountry'])){
		include ("editcountry.php");
	}
	if(isset($_GET['editcontact'])){
		include ("editcontact.php");
	}
	
	if(isset($_GET['editimage'])){
		include("editdp.php");
	}
	if(isset($_GET['del_account'])){
		include("del_account.php");
	}
	if(isset($_GET['editstate'])){
		include("editstate.php");
	}
	if(isset($_GET['editzip'])){
		include("editzip.php");
	}

	?>
	
	
	
	</div>
	
	</div>
	</div>
	</div>
	<div id="wrapfooter">
<?php include'footer.php';?>
</div>
	</div>
	
</body> 
</html> 