<?php 

if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}?>
<link rel="stylesheet" type="text/css" href="edit_single_pro.css"/>
<div id ="products_box">
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
			
			float:right;
			margin-right: 5em;
			margin-top:4em;
			padding-left:3em;
		}
		img {
			width:400px;
			height:400px;
		}
		#del{
			padding:.8em;
			background-color:#FF0000;
			color:white;
			border-radius:5em;
		}
		
		</style>
		<div id='single_product'>
				
				<img src='../images/product_images/$pro_image' />
			
				<div id='inner'>
				
				<h1>$pro_title</h1>
				<h2>Price: $$pro_price</h2>
				<p><strong>Description: </strong>$pro_desc</p>
				
				<p><strong>Keywords to Search:</strong> $pro_keywords </p>	
					<p><a href='del_product.php?del_product=$pro_id'><button id='del'>Delete product</button></a></p>
				</div>
				</div> 
				
				";
	}
	}
	?>
	<div id="table">
	<form method="post" action="" enctype="multipart/form-data" > 

<table> 
	<tr > 
		<td colspan="2"><center><h3>You may use the form below to update!</h3></center></td>
</tr>
<tr> 
	<td class="fi">Product Title:</td> 
	<td><input required type="text" name="product_title" style="width:100%; border-radius:.7em; padding: 1em;" value="<?php echo "$pro_title";?>"></td>
</tr> 

<tr> 
	<td class="fi">Product Price:</td> 
	<td>$ <input required type="text" name="product_price" style="width:96%; border-radius:.5em; padding: 1em;"value="<?php echo "$pro_price";?>"</td>
</tr> 
<tr> 
	<td class="fi">Product Description:</td> 
	<td><textarea type="text" rows="3" name="product_desc"style="width:100%; border-radius:.7em; padding: 1em;"><?php echo "$pro_desc";?></textarea> </td>
</tr> 
<tr> 
	<td class="fi">Product Keywords:</td> 
	<td><input type="text" name="product_keywords" style="width:100%; border-radius:.7em; padding: 1em;"value="<?php echo"$pro_keywords";?>"></td>
</tr> 
<tr>
<td colspan="2"><center><input type="submit" name="Submit" value="Update Product Entry"  style="border-radius:.7em; padding: 1em;"></center></td> 
</tr>
</table>
</form>
</div>
	</div>
	
<?php 

if(isset($_POST['Submit'])){
	$update_id = $product_id;
	$update_title = $_POST['product_title'];
	$update_price = $_POST['product_price'];
	$update_desc = $_POST['product_desc'];
	$update_keywords = $_POST['product_keywords'];
	
	
	$update_query = "UPDATE products SET product_title='$update_title',product_price='$update_price',product_desc='$update_desc',product_keywords='$update_keywords' WHERE product_id='$update_id'";
	
	$update = mysqli_query($connect,$update_query);
	if($update){
		echo "<script>window.open('admin_dashboard.php?pro_id=$pro_id','_self');</script>";
	}
}
?>