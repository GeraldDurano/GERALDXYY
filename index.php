<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
  
<div class="container">
 



  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
  
    
</div>
		
    <div class="container">
    <html>
<head>
	<title>Add Data</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
<style type="text/css">
	a {
    color: #00549c;
    text-decoration: none;
    font-size: 30px;
    text-align: center;
    padding-left: 800px;
    font-family: 'Sigmar One', cursive;
}

	h1 {
    color: #009814;
    text-decoration: none;
    font-size: 30px;
    text-align: center;
    padding-left: 0.1px;
    font-family: 'Sigmar One', cursive;
}
.navbar-inverse .navbar-nav>li>a {
    color: #f10000;
    font-family: initial;
    font-size: x-large;
}

</style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
  <li><a href="home.php">Home</a></li>
    <li><a href="add.html">Student Table</a></li>
     <li><a href="add2.php">Class Table</a></li>
       <li><a href="index3.php"> View Class Table</a></li>
     <li><a href="index2.php"> View Student Table</a></li>

  </ul>
  <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
</nav>
</body>
</html>
    </div>

</body>
</html>
<?php 
   

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
