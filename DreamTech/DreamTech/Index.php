<?php
session_start();
include("db.php");

?>
 
 <html> 
<head>

	<title>Welcome to DreamTech</title> 
	<link rel="stylesheet" type="text/css" href="Login.css"/> 
	<link rel="stylesheet" type="text/css" href="Index.css"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script>
	jQuery(document).ready(function($){
	var path = window.location.pathname.split("/").pop();
	
	if (path == ''){
		path = 'index.php';
		
	}
	var target = $('#Navigation a[href="'+path+'"]');
	target.addClass('active');
});
	</script>
</head> 

<body> 
<div id="nav">
<?php include'navigation.php'; ?>
</div>

<div class="wrapper" >


	<div id="content" style="padding-top:0em;">
		<div class="slideshow-container">

	<div class="mySlides fade">
	  <div class="numbertext"></div>
	  <img src="images/slideshow/banner2.jpg" style="width:100%; height:40%;" >
	  <p > <center><div id="body"><h2 > Welcome to DreamTech!. <br/>“Creating sustainable value” is our purpose that unites all of us at DreamTech.</h2> <br/><h3>We want to create value – for our customers and consumers, for our teams and our people, <br />for our shareholders as well as for the wider society and communities in which we operate.</h3></center></div></p>
	</div>


	</div>
	<div id="wrapfooter">
<?php include'footer.php';?>
</div>
</div>


</body> 
</html> 

				
	