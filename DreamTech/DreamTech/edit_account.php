<style> 
table{
	margin-left: 15%;
	margin-top: 2em; 
	border: 2px dashed gray; 
	width: 70%;
	margin-right:20%;
	
	border-collapse: collapse;
	
}
tr{
	border: 2px solid gray;
	padding:1em;
	
}
td{
	padding:1em;
}


</style>
<?php 
$user = $_SESSION['customer_email'];
$get_img = "select * from customers where customer_email='$user'";

$run_img = mysqli_query($connect, $get_img);
$row_img = mysqli_fetch_array($run_img);

	$c_name = $row_img['customer_name'];
	$c_email = $user;
	$c_country = $row_img['customer_country'];
	$c_city = $row_img['customer_city'];
	$c_contact = $row_img['customer_contact'];
	$c_address = $row_img['customer_add'];
	$c_image = $row_img['customer_image'];
	$c_zip = $row_img['customer_zip'];
	$c_state = $row_img['customer_state'];

?>
<table> 
<tr> 
<th colspan ="3"><h3> This is your information that we currently have </h3></th>
</tr> 
<tr> 
<td>Your Name:</td> 
<td><?php echo "$c_name"; ?></td>
<th><a href="myaccount.php?editname">Edit</a></th>
</tr>

<tr> 
<td>Your Email:</td> 
<td><?php echo "$c_email"; ?></td>
<th><a href="myaccount.php?editEmail">Edit</a></th>
</tr>
<tr> 
<td>Your Address:</td> 
<td><?php echo "$c_address"; ?></td>
<th><a href="myaccount.php?editaddress">Edit</a></th>
</tr>

<tr> 
<td>Your City:</td> 
<td><?php echo "$c_city"; ?></td>
<th><a href="myaccount.php?editcity">Edit</a></th>
</tr>
<tr> 
<td>Your Country:</td> 
<td><?php echo "$c_country"; ?></td>
<th><a href="myaccount.php?editcountry">Edit</a></th>
</tr>
<td>Your State:</td> 
<td><?php echo "$c_state"; ?></td>
<th><a href="myaccount.php?editstate">Edit</a></th>
</tr>
<td>Your Zip:</td> 
<td><?php echo "$c_zip"; ?></td>
<th><a href="myaccount.php?editzip">Edit</a></th>
</tr>
<tr> 
<td>Your Contact:</td> 
<td><?php echo "$c_contact"; ?></td>
<th><a href="myaccount.php?editcontact">Edit</a></th>
</tr>
<td>Your Profile Pic:</td> 
<td><?php echo "$c_image"; ?></td>
<th><a href="myaccount.php?editimage">Edit</a></th>
</tr>




</table> 


