
<link rel="stylesheet" type="text/css" href="sidebar.css"/>
<link rel="stylesheet" type="text/css" href="cust_sidebar.css"/>

<div id="sidebar"> 

<center>
<h2 id="cath2"><?php include 'userdisp.php';?></h2> 
<?php 
if(isset($_SESSION['customer_email'])){
$user = $_SESSION['customer_email'];
$get_img = "select * from customers where customer_email='$user'";

$run_img = mysqli_query($connect, $get_img);
$row_img = mysqli_fetch_array($run_img);
$c_image = $row_img['customer_image'];
$c_name = $row_img['customer_name'];


echo "<img id='cust'src='cust_data/cust_profile_image/$c_image' width='170' height='150'/>";

}

?>

<h2 id="cath2">Account Actions</h2> 

<ul id="catul" >
<a href="myaccount.php?edit_account"><li>Edit Account Info</li></a>
<a href="myaccount.php?my_orders"><li>View My Orders</li></a>
<a href="myaccount.php?change_pass"><li>Change Password</li></a>
<a href="myaccount.php?del_account"><li>Delete Account</li></a>
</ul>
 



<center> 

</div>