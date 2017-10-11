
<?php include 'db.php';?>
<link rel="stylesheet" type="text/css" href="signup.css"/> 
<div id="content">
	
		<div id="loginForm">
		<h3> Create a new account using the form below!! </h3>
		
			<?php 
		if(isset($_POST['submit'])){
			$ip = getIp();
			$c_name = $_POST['customer_name'];
			$c_email = $_POST['customer_email'];
			$c_pass = $_POST['customer_pass'];
			$c_ver_pass = $_POST['ver_password'];
			$c_pass_md5=md5($c_pass); 
			$c_image = $_FILES['customer_image']['name'];
			$c_image_tmp = $_FILES['customer_image']['tmp_name'];
			$c_country = $_POST['customer_country'];
			$c_city = $_POST['customer_city'];
			$c_contact = $_POST['customer_contact'];
			$c_address = $_POST['customer_add'];
			$c_state = $_POST['customer_state'];
			$c_zip = $_POST['customer_zip'];
		
		
			if($c_pass != $c_ver_pass){

				echo "<div id='error_msg'>Passwords fields do not match. Please try again.</div>";
			}
			
			else if(strlen($c_pass) < 6){
				echo "<div id='error_msg'>You need to have atleast 6 characters in the password field.Please try again.</div>";
				
			
			}
			else{
			$query_c = "SELECT customer_email FROM customers WHERE customer_email='$c_email'";
			$check_query = mysqli_query($connect, $query_c);
			if(mysqli_num_rows($check_query) > 0){
				echo "<div id='error_msg'>The account already Exist with this Email. <a href='login.php'>Click Here</a> to login.</div>";
			}
			else{
			move_uploaded_file($c_image_tmp, "cust_data/cust_profile_image/$c_image");
			
			 $insert_c = "INSERT INTO customers(customer_ip, customer_name, customer_email, customer_pass, customer_country, customer_city, customer_add, customer_image, customer_contact,customer_zip,customer_state) 
			VALUES ('$ip','$c_name','$c_email','$c_pass_md5','$c_country','$c_city','$c_address','$c_image','$c_contact', '$c_zip', '$c_state')";
			$create_customer= mysqli_query($connect, $insert_c);
		
			
			if($create_customer){
				

         echo "<div id='error_msg'>Account creation was successful. <a href='login.php'>Click Here</a> to login.</div>";
    
    }
	else {
		  echo "<div id='error_msg'>An Error Occured. Please Try Again!</div>";
		 
		 
		}
			
			
		}
		}
		}		
		
		?>
			<form method="post" action="signup.php" enctype="multipart/form-data"> 
			<center>
			
				<strong><label>Please Enter Your Information Below</label></strong>
			<br/>
			<br/>
			<br/>
			
			<table> 
				<tr>
					<td>
				<strong><label class="field">Full Name: </label></strong>
					</td>
					<td>
				<input name="customer_name" type="text" required></input>
					</td>
					<th></th>
					<td>
				<strong><label class="field">Country:  </label></strong>
					</td>
					<td>
				<input name="customer_country" type="text" required></input>
					</td>
				</tr>
				
				<tr >
				<th colspan="2"> <p></p></th> 
						</tr>
						
			<tr > 
				<td>
			
				<strong><label class="field" required>Email:</label></strong>
				</td>
				<td>
				<input name="customer_email" maxlength="100" type="email"></input>
				</td>
				<th></th>
				<td>
				<strong><label class="field" required >City:  </label></strong>
					</td>
					<td>
				<input name="customer_city" type="text"></input>
					</td>
			</tr>
				
<tr >
				<th colspan="2"> <p></p></th> 
						</tr>
				<tr >
					<td>
				<strong><label class="field"  >Password:</label></strong>
				</td>
				<td>
				<input name="customer_pass" maxlength="30" type="password" required ></input>
				</td>
				<th></th>
				<td>
				<strong><label class="field"  >Verify Password:</label></strong>
				</td>
				<td >
				<input name="ver_password"  maxlength="30" type="password" required></input>
				</td>
				
				</tr>
				
				<tr>
				<th colspan="2"> <p></p></th> 
						</tr>
						<tr>
						<td>
				<strong><label class="field">Profile pic:  </label></strong>
					</td>
					<td>
				<input name="customer_image" type="file" size="171px"></input>
					</td>
						
					
				<th></th>
				<td>
				<strong><label class="field">Address:  </label></strong>
					</td>
					<td>
				<textarea name="customer_add" type="text" rows="4"required></textarea>
					</td>
				
				</tr>
								<tr>
				<th colspan="2"> <p></p></th> 
						</tr>
						<tr>
						<td>
				<strong><label class="field">State:  </label></strong>
					</td>
					<td>
				<input name="customer_state" maxlength="100" type="text" required> </input>
					</td>
						
					
				<th></th>
				<td>
				<strong><label class="field">Zip:  </label></strong>
					</td>
					<td>
				<input name="customer_zip" maxlength="100" type="text" required> </input>
					</td>
				
				</tr>
				
				<tr >
				<th colspan="2"> <p></p></th> 
						</tr>
				<tr align="center">
				
					<td>
				<strong><label class="field" >Phone Number:</label></strong>
				</td>
				<td>
				<input name="customer_contact" maxlength="100" type="text" required> </input>
				</td>
				
				</tr>
				</table>
				<br />
				<br/>
			<button id="logbtn" name="submit" type="submit" value="Sign Up">Sign Up</button>
			<br/>
			<br/>
			<br/>
			
			</center>
			</form> 
			
		<p> <h4>Already Have An Account? <a href="login.php">Click Here</a> to Login!!</h4></p>
		</div>
	</div>
	