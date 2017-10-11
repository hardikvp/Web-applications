<!DOCTYPE html >
<html>
<head>
<style>
body {
    background-color: #4E4E4E;
    text-align: center;         /* make sure IE centers the page too */
}
 
#wrapper {
    width: 900px;
    margin: 0 auto;             /* center the page */
}
 
#content {
    background-color: #fff;
    border: 1px solid #000;
    float: left;
    font-family: Arial;
    padding: 20px 30px;
    text-align: left;
    width: 93%;                /* fill up the entire div */
}
 
#menu {
    float:right;
    border: 1px solid #000;
    border-bottom: none;        /* avoid a double border */
    clear: both;                /* clear:both makes sure the content div doesn't float next to this one but stays under it */
    width:100%;
    height:20px;
    padding: 0   ;
    background-color: #fff;
    text-align: left;
    font-size: 85%;
}
 
#menu a:hover {
    background-color: #009FC1;
}
 
#userbar {
    background-color: #fff;
    float: right;
    width: 230px;
    padding: 0 10px;
}
#head {
    background-color: #FF4500;
    border: 1px solid #000;
    text-align: center;
    font-family: Arial;
    width:100%;
}
     
#footer {
    clear: both;
}
 
/* begin table styles */
table {
    
    border-collapse: collapse;
    width: 100%;
}
 
table a {
    float : center;
    color: #000;
}
 
table a:hover {
    color:#373737;
    text-decoration: none;
}
 
th {
    background-color: #B40E1F;
    color: #F0F0F0;
}
 
td {
    padding: 5px;
}
 
/* Begin font styles */
h1, #footer {
    font-family: Arial;
    color: #F1F3F1;
}
 
h3 {margin: 0; padding: 0;}
 
/* Menu styles */
.item {
    background-color: #00728B;
    border: 1px solid #032472;
    color: #FFF;
    font-family: Arial;
    padding: 3px;
    text-decoration: none;
}
 
.leftpart {
    width: 70%;
}
 
.rightpart {
    width: 30%;
}
 
.small {
    font-size: 75%;
    color: #373737;
}
#footer {
    font-size: 65%;
    padding: 3px 0 0 0;
}
 
.topic-post {
    height: 100px;
    overflow: auto;
}
 
.post-content {
    padding: 30px;
}
 
textarea {
    width: 500px;
    height: 200px;
}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>PHP-MySQL forum</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</style>
</head>
<body>
<h1>My Discussion Forum</h1>
    <div id="wrapper">
    <div id="menu">
        <a class="item" href="/forum/index.php">Home</a> -
        <a class="item" href="/forum/create_topic.php">Create a topic</a> -
        <a class="item" href="/forum/create_cat.php">Create a category</a>
         
        <div id="userbar">
	<div id="userbar">
	
	<?php
	session_start();
    	if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'])
    	{
        	echo 'Hello ' . $_SESSION['user_name'] . '. Not you? <a class= "item" href="signout.php">Sign out</a>';
    	}
    	else
    	{
        	echo '<a class="item" href="signin.php">Sign in</a> or <a class="item" href="signup.php">create an account</a>.';
    	}?>
</div>
</div>

   <div id = "content">
   