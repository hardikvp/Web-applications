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
	
	
	
	<?php
	if(!isset($_SESSION['customer_email'])){
		include("loginform.php");
	}
	else{
		include("payment.php");
	}
	?>
	</div>
	</div>
	</div>
	
	<div id="wrapfooter">
<?php include'footer.php';?>
</div>
</div>


</body> 
</html> 

				
	