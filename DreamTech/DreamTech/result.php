 <?php session_start();?>
 
 <html> 
<head>
	<title>Results for search</title> 
	<link rel="stylesheet" type="text/css" href="Login.css"/> 
	<link rel="stylesheet" type="text/css" href="Index.css"/>
	<link rel="stylesheet" type="text/css" href="Shop.css"/>
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
<?php include'sidebar.php'?>

<div class="wrapper">


	<div id="content">
	<div id="products_box">
	<?php
	if(isset($_GET['user_search'])){
		$search_query = $_GET['user_search'];
	$get_product = "SELECT * FROM products where product_keywords like '%$search_query%'";
	$run_product= mysqli_query($connect,$get_product);
	while($row_product= mysqli_fetch_array($run_product)){
		$pro_id = $row_product['product_id'];
		$pro_cat = $row_product['product_cat'];
		$pro_brand = $row_product['product_brand'];
		$pro_title = $row_product['product_title'];
		$pro_price = $row_product['product_price'];
		$pro_image = $row_product['product_image'];
		
		echo " 
		 
			<style>
		a,a:visited{
			text-decoration:none;
			color:black;
		}
		button{
			padding:.8em;
			background-color:#4CAF50;
			color:white;
			border-radius:5em;
			
		}
		</style>
		<div id='single_product'>
				
				<a href='productpage.php?pro_id=$pro_id'><img src='images/product_images/$pro_image' width='120' height='120' />
				<h3>$pro_title</h3></a>
				<p>$<b> $pro_price</b></p>
				<a href='shop.php?add_cart=$pro_id'><button>Add to Cart</button></a>
				</div> 
				
				";
	}
	}
	?>
	
	</div>
	</div>
	</div>
	</div>
	<div id="wrapfooter">
<?php include'footer.php';?>
</div>



</body> 
</html> 

				
	