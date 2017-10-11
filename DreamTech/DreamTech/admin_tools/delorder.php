
<?php
if(!isset($_SESSION['username'])){
echo "<script>window.open('admin_login.php','_self');</script>";}

$order_id = $_GET['del_order'];
				$delete_order = "DELETE FROM orders WHERE order_id='$order_id'";
				$run_delete = mysqli_query($connect, $delete_order);
				if($run_delete){
				echo "<script> alert('The order was successfully deleted');</script>";
				echo "<script> window.open('admin_dashboard.php?manageorders','_self');</script>";
				}
	?>