<?php 
if(!isset($_SESSION['customer_email'])){
	echo "<script>window.open('login.php','_self');</script>";
}
$email = $_SESSION['customer_email'];
$get_cust = "select * from customers where customer_email='$email'";
$run_customer = mysqli_query($connect, $get_cust);
$row_customer =mysqli_fetch_array($run_customer);
$id = $row_customer['customer_id'];
$pass = $row_customer['customer_pass'];

$display ="";
if(isset($_POST['submit'])){
	$password_cur = $_POST['password_cur'];
	$password_cur = md5($password_cur);
	$password_new = $_POST['password_new'];
	$pass_update = md5($password_new);
	$password_ver = $_POST['password_ver'];
	if($password_cur != $pass){
		$display = "Current password does not match our records";
	}
	else if($password_new != $password_ver){
		$display = "The New passwords do not match. Please try again";
	}
	else if(strlen($password_new) < 6){
				$display = "The new password entered is too short. Must be greater than 6 characters";
				
			
			}
			else{
	$get_cust = "update customers SET customer_pass='$pass_update' where customer_id='$id'";
$run_customer = mysqli_query($connect, $get_cust);
$display = "Your Password change was successfully processed!";
}

}


?>
<link rel="stylesheet" type="text/css" href="editname.css"
<div id="content">
<center><h1>You may change your password below</h1></center>
<form method="post" action="" enctype="multipart/form-data" > 

<table style="margin-left:30%;"> 
<tr > 
		<td colspan="3"><center><div id='error_msg'><?php echo $display; ?></div></center></td>
</tr>
	<tr > 
		<td colspan="3"><center></center></td>
</tr>
<tr> 
	<td class="fi">Current Password:</td> 
	<td>
	<input type="password" name="password_cur" required/>
	</td>
	
</tr> 
<tr> 
	<td class="fi">New Password:</td> 
	<td>
	<input type="password" name="password_new" required/>
	</td>
	
	
</tr> 
<tr> 
	<td class="fi">Verify New password:</td> 
	<td>
	<input type="password" name="password_ver" required/>
	</td>
	
	
</tr> 
<tr align="center"> 
	<td colspan="3">
	<input type="submit" name="submit" value="Update"/>
	</td> 
	
</tr> 
</table>
</form>