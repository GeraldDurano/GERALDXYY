<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM tbl_class ORDER BY id DESC");
?>

<html>
<head>	
	
	
<title>Homepage</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 30px;	
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
    font-family: 'Staatliches', cursive;
    text-align: center;
}
a{
	font-family: 'Staatliches', cursive;
}
</style>
</head>




<body>
	<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
  <li><a href="home.php">Home</a></li>
    <li><a href="add.html">Student Table</a></li>
     <li><a href="add2.php">Class Table</a></li>
      <li><a href="index2.php"> View Class Table</a></li>
     <li><a href="index3.php"> View Student Table</a></li>
   
  </ul>
 <ul class="nav navbar-nav navbar-right">
      
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>

</nav>
	
<a href="add2.php">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Class Code</td>
		<td>Subject Code</td>
		<td>Time</td>
		<td>Teacher</td>
		<td>Update</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['classcode']."</td>";
		echo "<td>".$row['subjectcode']."</td>";
		echo "<td>".$row['time']."</td>";	
		echo "<td>".$row['teacher']."</td>";	
		echo "<td><a href=\"edit2.php?id=$row[id]\">Edit</a> | <a href=\"delete2.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
