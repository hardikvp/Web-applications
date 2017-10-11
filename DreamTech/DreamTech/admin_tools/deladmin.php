<?php 
session_start();

if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}
	include("db.php");
	
	if(isset($_GET['admin_username'])){
	$delete_id = $_GET['admin_username'];
	$delete_cust = "delete from admin where username='$delete_id'";
	
	$run_del = mysqli_query($connect, $delete_cust);
	
	if($run_del){
	echo "<script> alert('An admin was successfully deleted! You need to login again!')</script>";
	session_destroy();
	echo "<script> window.open('admin_login.php','_self')</script>";
	
	
	}
	else{
		echo "<script> alert('admin requested for deletion was NOT deleted. Please try again!')</script>";
	echo "<script> window.open('admin_dashboard.php?manage_admins','_self')</script>";
	}
	
	
	}
	?>