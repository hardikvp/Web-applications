<?php 

	include("db.php");
	
	if(isset($_GET['cat_id'])){
	$delete_id = $_GET['cat_id'];
	$delete_cat = "delete from categories where cat_id='$delete_id'";
	
	$run_del = mysqli_query($connect, $delete_cat);
	
	if($run_del){
	echo "<script> alert('A category was successfully deleted!')</script>";
	echo "<script> window.open('admin_dashboard.php?addcat','_self')</script>";
	
	
	}
	else{
		echo "<script> alert('Category was NOT deleted. Please try again!')</script>";
	echo "<script> window.open('admin_dashboard.php?addcat','_self')</script>";
	}
	
	
	}
	?>