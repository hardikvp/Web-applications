
<link rel="stylesheet" type="text/css" href="Insert.css"/>
<link rel="stylesheet" type="text/css" href="Addcat.css"/>
<link rel="stylesheet" type="text/css" href="viewUsers.css"/>

<?php include("db.php");


if(!isset($_SESSION['username'])){
	echo "<script>window.open('admin_login.php','_self');</script>";
}?>

<body> 
<div id="contentr">
<center><h1>You are currenty in Admin Area, you may view/remove admin using this form</h1></center>
<form method="post" action="" enctype="multipart/form-data" > 
</form>
</div>
<div id="content2">
<table>
<tr>
<th colspan="5"><h2> Below are current admins in the database.</h2></th>
</tr>
<tr>
<th colspan="5"><h3> For security reasons passwords are not listed.</h3></th>
</tr>
<tr> 
<th>Username</th>
<th>Admin Name</th>
<th>Actions</th>
</tr>
<center>
<?php
$get_users = "SELECT * FROM admin";
	$run_users= mysqli_query($connect,$get_users);
	while($row_users= mysqli_fetch_array($run_users)){
		$admin_username = $row_users['username'];
		$admin_name = $row_users['admin_name'];
		
		
		echo "
		<style>
		#del{
			padding-top:.5em;
			padding-bottom:.5em;
			padding-right:1.5em:
			padding-left:1.5em;
			background-color:#FF0000;
			color:white;
			border-radius:4em;
			margin-top:.5em;
			
		}
		#normal{
			padding-top:.5em;
			padding-bottom:.5em;
			padding-right:1.5em:
			padding-left:1.5em;
			background-color:#4CAF50;
			color:white;
			border-radius:4em;
			
		}
		td{
			text-align:center;
		}
		</style>
		
		<tr>
		<td>$admin_username</td>
		<td>$admin_name</td>
		
		<td>
		
		
		
		<a href='deladmin.php?admin_username=$admin_username'><button id='del'>Delete Admin</button></a>
		</td>
		</tr>
		";
	}
?>
</center>
</table> 
</div>
 

