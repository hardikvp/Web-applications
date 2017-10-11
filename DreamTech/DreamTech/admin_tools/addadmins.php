<?php
include("db.php");


if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}
?>
<link rel="stylesheet" type="text/css" href="admin_login.css"/> 
<div id="admsignup" > 

<div id="main"> 
<div id="login">

<form method="post" action="">
<table> 
<tr>
<th colspan="2"><h2> Add Admin Portal</h2></th>
</tr> 

<tr>
<td colspan="2"> 
<?php 
		if(isset($_POST['login'])){
			
			$c_name = $_POST['name'];
			$c_username = $_POST['username'];
			$c_pass = $_POST['password'];
			$c_pass=md5($c_pass); 
			
			
			$query_c = "SELECT username FROM admin WHERE username='$c_username'";
			$check_query = mysqli_query($connect, $query_c);
			if(mysqli_num_rows($check_query) > 0){
				echo "<div id='error_msg'>Account Exists Already.</div>";
			}
			else{
			
			 $insert_c = "INSERT INTO admin (admin_name, username, password)
			VALUES ('$c_name','$c_username','$c_pass')";
		$insert = mysqli_query($connect,$insert_c);
			
			
			if($insert){

         echo "<div id='error_msg'>Account creation was successful.</div>";
        
    }
	else {
		 echo "<script>alert('account creation failed');</script>";
		 
		}
			
			
		}
		}		
		
		?>
</td>
</tr>
<tr>
<th colspan="2">You May Create Admins Using This Form.</th>
</tr> 
<tr>
<td>Full Name:</td> 
<td><input class="input" name="name" type="text"></input></td>
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
<td colspan="2"><input id="button" name="login" type="submit" value="Sign Up"></input>
</tr>
<tr align="center"> 
<td colspan="2"><h4></h4></input>
</tr>


</table> 

</form>
</div>

</div>

</div> 
