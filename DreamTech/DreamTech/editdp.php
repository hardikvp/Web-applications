<?php 

$email = $_SESSION['customer_email'];
$get_cust = "select * from customers where customer_email='$email'";
$run_customer = mysqli_query($connect, $get_cust);
$row_customer =mysqli_fetch_array($run_customer);
$id = $row_customer['customer_id'];

$display ="";
if(isset($_POST['submit'])){
	$cust_image = $_FILES['newbrand']['name'];
	$cust_image_tmp = $_FILES['newbrand']['tmp_name'];
	
	$get_cust = "update customers SET customer_image='$cust_image' where customer_id='$id'";
$run_customer = mysqli_query($connect, $get_cust);
move_uploaded_file($cust_image_tmp, "cust_data/cust_profile_image/$cust_image");
$display = "Your profile pic was successfully updated!";
}




?>
<link rel="stylesheet" type="text/css" href="editname.css"
<div id="content">
<center><h1>You may update your profile picture here</h1></center>
<form method="post" action="" enctype="multipart/form-data" > 

<table>
<tr > 
		<td colspan="3"><center><div id='error_msg'><?php echo $display; ?></div></center></td>
</tr> 
	<tr > 
		<td colspan="3"><center></center></td>
</tr>

<tr> 
	<td class="fi">New image:</td> 
	<td>
	<input type="file" name="newbrand"/>
	</td>
	<td >
	<input type="submit" name="submit" value="Update"/>
	</td> 
	
</tr> 
</table>
</form>