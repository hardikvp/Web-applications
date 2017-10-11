<?php include 'addcart.php';


?>
<link rel="stylesheet" type="text/css" href="nav.css"/>
	<script src="search.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


	<div id="Sear" style="float:right;"> 
<form id="formsear" name="SearchM" method="get" action="result.php" enctype="multipart/form-data"> 	
	<input id="txtsearch" type="text" name="user_search" placeholder="Search Here"  onKeyPress="document.SearchM.submit"/>
</form> 
</div> 
<div id="quan">
<?php
$tot_qty=0;
$get_total = "SELECT * FROM cart";
	$run_product= mysqli_query($connect,$get_total);
	while($row_product= mysqli_fetch_array($run_product)){
		$pro_qty  = $row_product['qty'];
		$tot_qty = $tot_qty + $pro_qty;
		
	}
	?>
			 : <?php echo $tot_qty; ?>
	</div>
	<div class="Cart">
			<a href="cart.php"><img  src="https://www.nebulainfotech.com/images/slider/xecom4.png.pagespeed.ic.vuHG8Dorw6.png" /></a>
	</div>


	
		<div>
			<div  id="Navigation"> 
			<ul>
				<li><a id="l1" href="Index.php">Home</a></li>				
				<li><a id="l2" href="Shop.php">Shop</a></li>
				
				<li><a id="l5"href="myaccount.php">My Account</a></li>
				<li><strong><?php 
				if(!isset($_SESSION['customer_email'])){
					echo "<a id='log1' href='Login.php'>Login</a> ";
				}
				else{
					echo "<a id='log1' href='logout.php'>Logout</a> ";
				}
				?>
					</a></strong></li>
			</ul>
			</div>
			<div id="logo">
				<a href="index.php"><img src="images/logo.png"></a>
			</div >
		<div id="sep">
		</div>	
</div>
<?php 
$ip = getIp();

$get_quan = "SELECT qty FROM cart where ip_add ='$ip'";
	$run_quan= mysqli_query($connect,$get_quan);
	while($row_quan= mysqli_fetch_array($run_quan)){
		
	}
?>