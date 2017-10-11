<?php 
session_start();

if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}
	include("db.php");
	
	if(isset($_GET['del_product'])){
	$delete_id = $_GET['del_product'];
	$delete_pro = "delete from products where product_id='$delete_id'";
	
	$run_del = mysqli_query($connect, $delete_pro);
	
	if($run_del){
	echo "<script> alert('A Poroduct was successfully deleted!')</script>";
	echo "<script> window.open('admin_dashboard.php?editproducts','_self')</script>";
	
	
	}
	
	
	}