

<div id="content">
	
		<div id="loginForm">
		<p><h3>If you are an Admin <a href="admin.php">Click Here</a> to Login!</h3></p>

		<p> <h3> Have An Account With Us? Login Below </h3></p>
			<?php
if(isset($_POST['login'])){
	$c_email = $_POST['email'];
	$c_pass = $_POST['pass'];
	$c_pass = md5($c_pass); 
	
	$sel_c = "SELECT * FROM customers WHERE customer_pass='$c_pass' AND customer_email='$c_email'";
	
	$run_c = mysqli_query($connect, $sel_c);
	
	$check_customer = mysqli_num_rows($run_c);
	
	if($check_customer == 0){
		
		echo "<div id='error_msg'>Passoword or Email is Incorrect. Please <a href='login.php'>Click Here</a> try again</div>";
			
		exit();
		
	}
	$ip = getIp();
	$sel_cart = "SELECT * FROM cart WHERE ip_add='$ip'";
	$run_cart = mysqli_query($connect, $sel_cart);
	$check_cart = mysqli_num_rows($run_cart);
	if ($check_customer>0 AND $check_cart==0){
		$_SESSION['customer_email']=$c_email;
		
		echo "<script> alert('You are Logged in Successfully!')</script>";
		echo "<script>window.open('myaccount.php','_self')</script>";
	}
	else
		$_SESSION['customer_email']=$c_email;
	
echo "<script> alert('You are Logged in Successfully!')</script>";
		echo "<script>window.open('checkout.php','_self')</script>";
}
?> 
			
			
			<form method="post" action="login.php"> 
			<center>
				<strong><label>Please Enter your Credentials to Login</label></strong>
			<br/>
			<br/>
			<br/>
				<strong><label class="field">Email:</label></strong>
				<input name="email"  type="text" required></input>
			<br/> 
			<br /> 
			
				<strong><label class="field"  >Password:</label></strong>
				<input name="pass" type="password" required></input>
				<br /> 
				<br />
				<br/>
			<input id="logbtn" type="submit" name="login" value="Login"></input>
			<br/>
			<br/>
			<br/>
			</center>
			</form> 
			
		<p> <h4>Don't Have An Account? <a href="signup.php">Click Here</a> to make one!!</h4></p>
		
		</div>
	</div>