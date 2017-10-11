
<?php include("getProducts.php");


if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}?>
<link rel="stylesheet" type="text/css" href="viewproducts.css"/>
<div id="display"> 
<div id="products_box">
	<?php getProducts();?>
	
	</div>
<div>
