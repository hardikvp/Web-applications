<?php 
session_start();

if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}
	include("db.php");
	
	if(isset($_GET['cust_id'])){
	$delete_id = $_GET['cust_id'];
	$delete_cust = "delete from customers where customer_id='$delete_id'";
	
	$run_del = mysqli_query($connect, $delete_cust);
	
	if($run_del){
	echo "<script> alert('A user was successfully deleted!')</script>";
	echo "<script> window.open('admin_dashboard.php?viewusers','_self')</script>";
	
	
	}
	else{
		echo "<script> alert('User requested for deletion was NOT deleted. Please try again!')</script>";
	echo "<script> window.open('admin_dashboard.php?viewusers','_self')</script>";
	}
	
	
	}
	?>