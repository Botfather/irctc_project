<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styler-index.css">
    <link rel="stylesheet" type="text/css" href="css/styler-report.css">
   </head>
  <?php include 'php_includes/navbar.php';?>

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irctc_data";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Database Connectivity Error! Please report to admin." . $conn->connect_error);} ?>
 <body>

 	<?php $sql = "SELECT `TktsBkd` FROM `actualdata`";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {$x=0;
             while($row = $result->fetch_assoc()) {
                 $hold1=$row["TktsBkd"];
                 	$data[$x]=$hold1;
                 	$x++;}}



             
                 ?>
	




  <div id='theatre'><h1>Month Wise Performance</h1><img src="generate.php?mydata=<?php echo urlencode(serialize($data)); ?>" /><br><br><br>
		<a href="index.php">Return to Menu</a>
  </div>

 <?php session_unset(); session_destroy(); ?>

  </body>	
   <footer class="clearfix" style="margin-top: 260px;text-align: center; postition: fixed;">
          <p> Developed for <b>IRCTC</b> | Summer Internship 2015</p>
</footer>

</html>
