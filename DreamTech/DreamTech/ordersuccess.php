 <?php session_start(); ?>
 <html> 
 
<head>
	<title>Shop at DreamTech</title> 
	<link rel="stylesheet" type="text/css" href="Login.css"/> 
	<link rel="stylesheet" type="text/css" href="Index.css"/>
	<link rel="stylesheet" type="text/css" href="Shop.css"/>
	<link rel="stylesheet" type="text/css" href="checkout.css"/>
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


<div class="wrapper">


	<div id="content">
	
	<div id="products_box">
	
	
<div id="paym"> 
<?php
$email = $_SESSION['customer_email'];

		echo "<h1> Congratulations! ".$email. " <br />Your order was successfully Processed.</h1>";
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
		
		<a href='http://localhost/myaccount.php?my_orders'><button id='btn'>See My orders</button></a> 
		";
	
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




