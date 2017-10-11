
<html> 
<head> 

<link rel="stylesheet" type="text/css" href="Insert.css"/>

<?php include("db.php");




if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}?>
<title> Admin Panel- Add Product</title>
</head> 

<body> 
<div id="mainb">
<center><h1>You are currenty in Admin Area, you may add products using this form</h1></center>
<form method="post" action="" enctype="multipart/form-data" > 

<table> 
	<tr > 
		<td colspan="2"><center>Please Enter the Following Infromation Below to Enter the product</center></td>
</tr>
<tr> 
	<td class="fi">Product Title:</td> 
	<td><input required type="text" name="product_title" style="width:100%; border-radius:.7em; padding: 1em;"placeholder="Enter Title of Product"></td>
</tr> 
<tr> 
	<td class="fi">Product Category:</td> 
	<td>
	<select required style="width:100%; border-radius:.7em; padding: 1em;" name="product_cat">
	<option>Select a Category</option> 
	<?php 
	$get_cats= "select * from categories";
	$run_cats = mysqli_query($connect, $get_cats);
	
	
	while($row_cats=mysqli_fetch_array($run_cats)){
		
		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];
		echo "<option value='$cat_id'>$cat_title</option>";
	}
	?>
	</select>
	</td>
</tr> 
<tr> 
	<td class="fi">Product Brand:</td> 
	<td>
	<select required style="width:100%; border-radius:.7em; padding: 1em;" name="product_brand">
	<option>Select a Brand</option> 
	<?php 
	$get_brands= "select * from brands";
	$run_brands = mysqli_query($connect, $get_brands);
	
	
	while($row_brands=mysqli_fetch_array($run_brands)){
		
		$brands_id = $row_brands['brand_id'];
		$brands_title = $row_brands['brand_title'];
		echo "<option value='$brands_id'>$brands_title</option>";
	}
	?>
	</select>
	</td>
</tr> 
<tr> 
	<td class="fi">Product Image:</td> 
	<td><input type="file" name="product_image" style="width:100%; border-radius:.7em; padding: 1em;"></td>
</tr> 
<tr> 
	<td class="fi">Product Price:</td> 
	<td>$ <input required type="text" name="product_price" style="width:96%; border-radius:.5em; padding: 1em;"placeholder="Enter Price of the product"></td>
</tr> 
<tr> 
	<td class="fi">Product Description:</td> 
	<td><textarea type="text" rows="3" name="product_desc"style="width:100%; border-radius:.7em; padding: 1em;"placeholder="Enter Description of Product"></textarea> </td>
</tr> 
<tr> 
	<td class="fi">Product Keywords:</td> 
	<td><input type="text" name="product_keywords" style="width:100%; border-radius:.7em; padding: 1em;"placeholder="Enter Keywords for the Product"></td>
</tr> 
<tr>
<td colspan="2"><center><input type="submit" name="Submit" value="Create Product Entry"  style="border-radius:.7em; padding: 1em;"></center></td> 
</tr>
</table>
</form>
</div>
</body> 
</html> 

<?php

if(isset($_POST['Submit'])){
	$product_title = $_POST['product_title'];
	$product_cat = $_POST['product_cat'];
	$product_brand = $_POST['product_brand'];
	$product_price = $_POST['product_price'];
	$product_desc = $_POST['product_desc'];
	$product_keywords = $_POST['product_keywords'];
	$product_image = $_FILES['product_image']['name'];
	$product_image_tmp = $_FILES['product_image']['tmp_name'];
	
	
   $sql = "INSERT INTO products(product_cat, product_brand, product_title, product_price, product_desc,product_image, product_keywords) VALUES('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
	mysqli_query($connect,$sql);
	
	move_uploaded_file($product_image_tmp, "../images/product_images/$product_image");
	
}





?> 

