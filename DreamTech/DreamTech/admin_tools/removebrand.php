<?php 
session_start();

if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}
	include("db.php");
	
	if(isset($_GET['brand_id'])){
	$delete_id = $_GET['brand_id'];
	$delete_brand = "delete from brands where brand_id='$delete_id'";
	
	$run_del = mysqli_query($connect, $delete_cat);
	
	if($run_del){
	echo "<script> alert('A brand was successfully deleted!')</script>";
	echo "<script> window.open('admin_dashboard.php?addbrands','_self')</script>";
	
	
	}
	else{
		echo "<script> alert('Brand was NOT deleted. Please try again!')</script>";
	echo "<script> window.open('admin_dashboard.php?addbrands','_self')</script>";
	}
	
	
	}
	?>