<?php 
if(!isset($_SESSION['customer_email'])){
	echo "<script>window.open('login.php','_self');</script>";
}
$email = $_SESSION['customer_email'];
$display ="";
if(isset($_POST['submit'])){
	if(!isset($_POST['confirm'])){
		$display= "You must confirm that you want to delete the account. Click on the checkbox blelow";
	}
	else{
		$del_customer = "DELETE FROM customers WHERE customer_email='$email'";
		$query_run= mysqli_query($connect, $del_customer);
		if ($query_run){
			echo"
			<script>
			alert('Account deletion was successful');
			</script>
			";
			session_destroy();
			
			echo"
			<script>
			window.open('login.php','_self');
			</script>
			";
		}
	}

}


?>
<link rel="stylesheet" type="text/css" href="editname.css"
<div id="content">
<center><h1>Account Deletion Form</h1></center>
<form method="post" action="" enctype="multipart/form-data" > 

<table  style="margin-left:20%; width:60%; float:left;"> 
<tr > 
		<td colspan="3"><center><div id='error_msg'><?php echo $display; ?></div></center></td>
</tr>
	<tr > 
		<td colspan="3"><center></center></td>
</tr>
<tr> 
	<td colspan="3" align="center" class="fi"><h2>Please confirm that you would want to delete the account</h2></td> 
	
</tr> 
<tr> 
	
	<td>
	<input type="checkbox" name="confirm" required/>
	</td>
	<td colspan="2" class="fi">By clicking this checkbox you confirm to delete this account. This will purge all your settings and all your orders will be archived.</td> 
	
	
</tr> 
<tr align="center"> 
	<td colspan="3">
	<input type="submit" name="submit" value="Update"/>
	</td> 
	
</tr> 
</table>
</form>