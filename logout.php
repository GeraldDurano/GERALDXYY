<?php 
session_start();
session_destroy();
echo "You have been logged out";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.container{
			columns: center;
		}
	</style>
</head>
<body>


	<div class="container"> <label>Please Log In</label><a href="login.php">Log In</a> </div>

</body>
</html>
