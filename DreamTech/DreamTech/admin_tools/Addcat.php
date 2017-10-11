
<link rel="stylesheet" type="text/css" href="Insert.css"/>
<link rel="stylesheet" type="text/css" href="Addcat.css"/>

<?php include("db.php");


if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}?>

<body> 
<div id="contentr">
<center><h1>You are currenty in Admin Area, you may add/view/remove categories using this form</h1></center>
<form method="post" action="" enctype="multipart/form-data" > 

<table> 
	<tr > 
		<td colspan="3"><center>Add New Category to Database</center></td>
</tr>

<tr> 
	<td class="fi">New Product Category:</td> 
	<td>
	<input type="text" name="newcat"/>
	</td>
	<td >
	<input type="submit" name="submit" value="Add category"/>
	</td> 
	
</tr> 
</table>
</form>
</div>
<div id="content2">
<table>
<tr>
<th colspan="3"><h2> Below are categories that are already added </h2></th>
</tr>
<tr> 
<th>Category ID</th>
<th>Category name</th>
<th>Actions</th>
</tr>
<center>
<?php
$get_cat = "SELECT * FROM categories";
	$run_cat= mysqli_query($connect,$get_cat);
	while($row_cat= mysqli_fetch_array($run_cat)){
		$cat_id = $row_cat['cat_id'];
		$cat_title = $row_cat['cat_title'];
		
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
		<td>$cat_id</td>
		<td>$cat_title</td> 
		<td><a href='removecat.php?cat_id=$cat_id'><button id='del'>Delete</button></a></td>
		</tr>
		";
	}
?>
</center>
</table> 
</div>
 

<?php

if(isset($_POST['submit'])){
	$new_cat = $_POST['newcat'];
	
   $sql = "INSERT INTO categories(cat_title) VALUES('$new_cat')";
	$add_query= mysqli_query($connect,$sql);

	if($add_query){
		echo "<script>alert('A Category was successfully added')</script>";
		echo "<script>window.open('admin_dashboard.php?addcat','_self')</script>";
	}
	else{
		echo "<script>alert('There was a problem adding category. Please Try again!')</script>";
		echo "<script>window.open('admin_dashboard.php?addcat','_self')</script>";
	}
	
}

?> 

