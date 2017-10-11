<?php 
include("functions.php");
?>
<link rel="stylesheet" type="text/css" href="sidebar.css"/>


<div id="sidebar"> 

<center>

<h2 id="cath2"> Categories </h2> 
<ul id="catul" >
<?php getCats(); ?>
</ul>

<h2 id="cath2"> Brands </h2> 
<ul id="catul" >
<?php getBrands();?> 
</ul>
<center> 

</div>