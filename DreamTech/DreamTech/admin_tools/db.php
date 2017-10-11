<?php

$connect = mysqli_connect("localhost", "akshittopiwala","akshittopiwalapass","akshittopiwaladatabase");
if(mysqli_connect_errno()){
	echo "The Connection to Database Failed".mysqli_connect_error();
}
?>
