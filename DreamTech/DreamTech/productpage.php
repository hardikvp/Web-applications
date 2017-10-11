 
 <?php include("getProducts.php");
 session_start();
 
 ?>
 <html> 
<head>
	<title>Shop at DreamTech</title> 
	<link rel="stylesheet" type="text/css" href="Login.css"/> 
	<link rel="stylesheet" type="text/css" href="Index.css"/>
	<link rel="stylesheet" type="text/css" href="productpage.css"/>
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

<div id="main">
<?php include'sidebar.php'?>


<div class="wrapper">


	<div id="content">
	<div id="products_box">
	<?php
	if(isset($_GET['pro_id'])){
		
		$product_id = $_GET['pro_id'];
	$get_product = "SELECT * FROM products where product_id ='$product_id'";
	$run_product= mysqli_query($connect,$get_product);
	while($row_product= mysqli_fetch_array($run_product)){
		$pro_id = $row_product['product_id'];
		$pro_cat = $row_product['product_cat'];
		$pro_brand = $row_product['product_brand'];
		$pro_title = $row_product['product_title'];
		$pro_price = $row_product['product_price'];
		$pro_image = $row_product['product_image'];
		$pro_desc = $row_product['product_desc'];
		$pro_keywords = $row_product['product_keywords'];
		
		
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
			border-radius: 5em;
			
		}
		button:selected{
			border:none;
		}
		#img{
			float:left;
			padding-top:2em;
		}
		#inner{
			width:50%;
			float:right;
			margin-right: 5em;
			margin-top:4em;
			padding-left:3em;
		}
		img {
			width:400px;
			height:400px;
		}
		
		</style>
		<div id='single_product'>
				
				<img src='images/product_images/$pro_image' />
			
				<div id='inner'>
				
				<h1>$pro_title</h1>
				<h2>Price: $$pro_price</h2>
				<p><strong>Description: </strong>$pro_desc</p>
				
				<p><strong>Keywords to Search:</strong> $pro_keywords </p> 
				<a href='shop.php?add_cart=$pro_id'><button>Add to Cart</button></a>
				</div>
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

				
	