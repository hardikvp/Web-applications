<?php 

$email = $_SESSION['customer_email'];
$get_cust = "select * from customers where customer_email='$email'";
$run_customer = mysqli_query($connect, $get_cust);
$row_customer =mysqli_fetch_array($run_customer);
$id = $row_customer['customer_id'];
$display ="";
if(isset($_POST['submit'])){
	$update_name = $_POST['newbrand'];
	$get_cust = "update customers SET customer_zip='$update_name' where customer_id='$id'";
$run_customer = mysqli_query($connect, $get_cust);
$display = "Your zip was successfully updated!";
}




?>
<link rel="stylesheet" type="text/css" href="editname.css"
<div id="content">
<center><h1>You may update your zip here</h1></center>
<form method="post" action="" enctype="multipart/form-data" > 

<table>
<tr > 
		<td colspan="3"><center><div id='error_msg'><?php echo $display; ?></div></center></td>
</tr> 
	<tr > 
		<td colspan="3"><center></center></td>
</tr>

<tr> 
	<td class="fi">New Zip:</td> 
	<td>
	<input type="text" name="newbrand"/>
	</td>
	<td >
	<input type="submit" name="submit" value="Update"/>
	</td> 
	
</tr> 
</table>
</form>