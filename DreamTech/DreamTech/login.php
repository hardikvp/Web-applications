<?php session_start();
include 'db.php';
?> 

 <html> 
<head>
	<title>Login - DreamTech</title> 
	<link rel="stylesheet" type="text/css" href="Login.css"/>
<link rel="stylesheet" type="text/css" href="Index.css"/>
	<script src="search.js"></script>	
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
	<div id="nav">
<?php include'navigation.php'; ?>
</div>
</div>
<div class="wrapper">
	<?php include'loginform.php';?>
</div>
<div id="wrapfooter">
<?php include'footer.php';?>
</div>
</body> 
</html> 



				
	