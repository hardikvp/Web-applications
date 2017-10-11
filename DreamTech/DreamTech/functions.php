<?php 

include ("db.php");
if(mysqli_connect_errno()){
	echo "The Connection to Database Failed".mysqli_connect_error();
}
function getCats(){
	global $connect;
	
	$get_cats= "select * from categories";
	$run_cats = mysqli_query($connect, $get_cats);
	echo "<style> .links{color:black; text-decoration:none;} 
	.links:visited {color:black; text-decoration:none;} </style>";
	
	while($row_cats=mysqli_fetch_array($run_cats)){
		
		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];
		echo "<li><a class='links' href='shop.php?cat_id=$cat_id'>$cat_title</a></li>";
	}
	
}

function getBrands(){
	global $connect;
	
	$get_brands= "select * from brands";
	$run_brands = mysqli_query($connect, $get_brands);
	echo "<style> .links{color:black; text-decoration:none;} 
	.links:visited {color:black; text-decoration:none;} </style>";
	
	while($row_brands=mysqli_fetch_array($run_brands)){
		
		$brands_id = $row_brands['brand_id'];
		$brands_title = $row_brands['brand_title'];
		echo "<li><a class='links' href='shop.php?brand_id=$brands_id'>$brands_title</a></li>";
	}
	
}
 


?>