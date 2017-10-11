<?php 
include('db.php');

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="admin_login.css"/> 

</head> 
<body> 
<div id="main"> 
<div id="login">

<form method="post" action="admin_login.php">
<table> 
<tr>
<th colspan="2"><h2> Admin Portal</h2></th>
</tr> 

<tr align="center"> 
<td colspan="2">
<?php
session_start();

if(isset($_SESSION['username'])){
	echo "
	<script> 
	window.open('admin_dashboard.php','_self');
	</script>
	";
}
if(isset($_POST['login'])){
	$c_username = $_POST['username'];
	$c_pass = $_POST['password'];
	$c_pass = md5($c_pass); 
	
	$sel_c = "SELECT * FROM admin WHERE username='$c_username' AND password='$c_pass'";
	
	$run_c = mysqli_query($connect, $sel_c);
	$check_customer = mysqli_num_rows($run_c);
	
	if($check_customer == 0){
		
		echo "<script>window.open('admin_login.php?invalid_login','_self');</script> ";
			
		exit();
			
		
	}
	else{
		$_SESSION['username']=$c_username;
		
		echo "<script> alert('You are Logged in Successfully!')</script>";
		echo "<script>window.open('admin_dashboard.php','_self')</script>";
	}
	
	
}
if(isset($_GET['invalid_login'])){
	echo "<div> Invalid Login. Try Again!</div>";
}
?> 






</input>
</tr>

<tr>
<th colspan="2">Please Login Using Your Admin Credentials</th>
</tr> 
<tr>
<td>Username:</td> 
<td><input class="input" name="username" type="text"></input></td>
</tr>

<tr> 
<td>Password:</td> 
<td><input class="input" name="password" type="password"></input></td>
</tr>
<tr align="center"> 
<td colspan="2"><input id="button" name="login" type="submit" value="Login"></input>
</tr>

</table> 

</form>
</div>

</div>
</body> 
</html>