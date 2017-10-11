 
 <?php 
 session_start();

 
 ?>


 <html> 
<head>
	<title>Shop at DreamTech</title> 
	<link rel="stylesheet" type="text/css" href="Login.css"/> 
	<link rel="stylesheet" type="text/css" href="Index.css"/>
	<link rel="stylesheet" type="text/css" href="cart.css"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script>
	jQuery(document).ready(function($){
	var path = window.location.pathname.split("/").pop();
	
	if (path == ''){
		path = 'index.php';
		
	}
	var target = $('#Navigation a[href="cart.php"]');
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
	<?php cart(); ?>
	<div id="products_box">
	<center>
	<form action="" method="post" enctype="multipart/form-data" >
		<table  align="center" width="90%" bgcolor="#eee">
		<tr> 
		<th>Remove</th>
		<th>Product(s)</th>
		<th>Quantity</th>
		<th>Price</th>
		</tr> 
		
		<?php
		$total = 0;
	global $connect;
	$ip = getIp();
	$sel_price = "SELECT * FROM cart WHERE ip_add='$ip'";
	$run_price = mysqli_query($connect, $sel_price);
	
	while($p_price = mysqli_fetch_array($run_price)){
		$pro_id = $p_price['p_id'];
		$pro_qty = $p_price['qty'];
		$pro_price = "SELECT * FROM products where product_id='$pro_id'";
		$run_pro_price = mysqli_query($connect,$pro_price);
		while($pp_price = mysqli_fetch_array($run_pro_price)){
			$product_price = array($pp_price['product_price']);
			
			$product_title = $pp_price['product_title'];
			$product_image = $pp_price['product_image'];
			$single_price = $pp_price['product_price'];
			$total_sub = $single_price * $pro_qty;
			$total = $total + $total_sub;
			
		
		
		
		?>
		
		<tr align="center">
		<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>" /> </td>
		<td><img src="images/product_images/<?php echo $product_image;?>" width="90px" height="90px"/>
		<br><br><strong>
		<?php echo $product_title; ?></strong>
		</td>
		<td>
		
		<input type="text" action="cart.php?pro_id"size="4" name="qty[<?php echo $pro_id?>]" value="<?php echo $pro_qty; ?>"></input>

	
		
		
		
		
		</td>
		<td><?php echo "$". $total_sub;?></td>
		</tr>
	<?php } } ?>
	<tr align="center">
	<th></th>
	<th></th>
	<th></th> 
	<th>Subtotal:    <?php echo "$". $total;?></th>
	</tr>
	<tr align="center"> 
	<th></th>
	<th colspan="2"> 
	<button class="btn" type="submit" name="update_cart">Update Cart</button> &nbsp; &nbsp; 
	<button class="btn" name="continue" >Continue Shopping</button> &nbsp; &nbsp; 
	<a href="checkout.php"><button name="checkout" class="btn" >Checkout</button></a>&nbsp; &nbsp; 
	<?php 

	if(isset($_POST['checkout'])){
	if(isset($_SESSION['customer_email'])){
		echo "<script>window.open('checkout.php', '_self')</script>";
	}
	else{
		
		echo "<script>window.open('login.php', '_self')</script>";
	}
	}
	
	?>
	</th> 
	<th> </th>
	
	</tr>
		</table>
	
	
	</form>

	</center><?php

		
	
		global $connect;
	$ip =  getIp();
	
	if(isset($_POST['update_cart'])){
		
		if(isset($_POST['remove'])){	
		foreach($_POST['remove'] as $remove_id){
			$del_product = "delete from cart where p_id ='$remove_id' AND ip_add ='$ip'";
		$run_delete = mysqli_query($connect, $del_product);
		
		if($run_delete){
			echo "<script> window.open('cart.php','_self')</script>";
		}
		
		}
	}
			foreach($_POST["qty"] as $key => $qty){
				if(is_numeric($qty)){
					if($qty < 1){
						$rem_qty= "delete from cart where p_id='$key' AND ip_add='$ip'";
			$rem_qty_query = mysqli_query($connect, $rem_qty);
			
			echo "
			<script>window.open('cart.php','_self');</script>
			";
					}
					else {
			$update_qty= "update cart set qty='$qty' where p_id='$key' AND ip_add='$ip'";
			$run_qty = mysqli_query($connect, $update_qty);
			
			echo "
			<script>window.open('cart.php','_self');</script>
			";
				}
				}
	}
	
		

	
	}
	
	
	
	
	if(isset($_POST['continue'])){
		echo "<script>window.open('Shop.php','_self')</script>";
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


				
	