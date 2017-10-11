
<link rel="stylesheet" type="text/css" href="Insert.css"/>
<link rel="stylesheet" type="text/css" href="Addcat.css"/>

<?php include("db.php");


if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}?>

<body> 
<div id="contentr">
<center><h1>You are currenty in Admin Area, you may add/view/remove brands using this form</h1></center>
<form method="post" action="" enctype="multipart/form-data" > 

<table> 
	<tr > 
		<td colspan="3"><center>Add New brand to Database</center></td>
</tr>

<tr> 
	<td class="fi">New Product brand:</td> 
	<td>
	<input type="text" name="newbrand"/>
	</td>
	<td >
	<input type="submit" name="submit" value="Add brand"/>
	</td> 
	
</tr> 
</table>
</form>
</div>
<div id="content2">
<table>
<tr>
<th colspan="3"><h2> Below are Brands that are already added </h2></th>
</tr>
<tr> 
<th>Brands ID</th>
<th>Brands name</th>
<th>Actions</th>
</tr>
<center>
<?php
$get_brand = "SELECT * FROM brands";
	$run_brand= mysqli_query($connect,$get_brand);
	while($row_brand= mysqli_fetch_array($run_brand)){
		$brand_id = $row_brand['brand_id'];
		$brand_title = $row_brand['brand_title'];
		
		echo "
		<style>
		#del{
			padding-top:.5em;
			padding-bottom:.5em;
			padding-right:1.5em:
			padding-left:1.5em;
			background-color:#FF0000;
			color:white;
			border-radius:4em;
			width:100%
		}
		td{
			text-align:center;
		}
		</style>
		
		<tr>
		<td>$brand_id</td>
		<td>$brand_title</td> 
		<td><a href='removebrand.php?brand_id=$brand_id'><button id='del'>Delete</button></a></td>
		</tr>
		";
	}
?>
</center>
</table> 
</div>
 

<?php

if(isset($_POST['submit'])){
	$new_brand = $_POST['newbrand'];
	
   $sql = "INSERT INTO brands(brand_title) VALUES('$new_brand')";
	$add_query= mysqli_query($connect,$sql);

	if($add_query){
		echo "<script>alert('A Brand was successfully added')</script>";
		echo "<script>window.open('admin_dashboard.php?addbrands','_self')</script>";
	}
	else{
		echo "<script>alert('There was a problem adding Brand. Please Try again!')</script>";
		echo "<script>window.open('admin_dashboard.php?addbrands','_self')</script>";
	}
	
}

?> 

