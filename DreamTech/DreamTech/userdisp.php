

</style>
<div id="us">


<?php 
if(isset($_SESSION['customer_email'])){
	echo "Logged in as <br/>".$_SESSION['customer_email'];
}
else{
	echo "Welcome: guest";
}

	?> 
</div>