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
    
    
        <?php if ($_SESSION["controller"]=='1') 
          { 
          	if($_SESSION["mode"]=='tbc')
          { $hold1=0; $hold2=0;?><?php 
       $arg1= $_GET["month1"].$_GET["year1"];
          $sql = "SELECT `TktsBkd` FROM actualdata WHERE `id`= $arg1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $hold1=$row["TktsBkd"];}} 
                $arg2= $_GET["month2"].$_GET["year2"];
          $sql = "SELECT `TktsBkd` FROM actualdata WHERE `id`= $arg2";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $hold2=$row["TktsBkd"];} }   
              $data = array("Argument1"=>$hold1, "Argument2"=>$hold2);
              }








      }?>

	

    <?php if ($_SESSION["controller"]=='2') 
        { if($_SESSION["mode"]=='tbc')
          { $hold2=0; $hold1=0;  
        for ($i=1; $i<=12 ; $i++) { 
        $arg1=$i.$_GET["year1"];
          $sql = "SELECT `TktsBkd` FROM actualdata WHERE `id`= $arg1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $hold1+=$row["TktsBkd"];}}} 

              $hold2=0; for ($i=1; $i<=12 ; $i++) { 
            $arg2= $i.$_GET["year2"];
            $sql = "SELECT `TktsBkd` FROM actualdata WHERE `id`= $arg2";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                $hold2+=$row["TktsBkd"];}} }  $data = array("Argument1"=>$hold1, "Argument2"=>$hold2);}








      }  ?>



			 <?php if($_SESSION["controller"]=='3')
             {		 if(($_SESSION["mode"]=='cwtb')&& $_GET["typ"]=='mh')

             	{	$arg= $_GET["month"].$_GET["year"];
             		$sql = "SELECT * FROM actualdata WHERE `id`= $arg";
        				$result = $conn->query($sql);
        			 if ($result->num_rows > 0) {
	             		while($row = $result->fetch_assoc()) {
	                 		$data = array("FC"=>$row['FC'], "1AC"=>$row['1AC'],"2AC"=>$row['2AC'],"3AC"=>$row['3AC'],"AC"=>$row['AC'],"SL"=>$row['2S'],"3E"=>$row['3E'],"EC"=>$row['EC']);	}}
	             }

	             if(($_SESSION["mode"]=='cwtb')&& $_GET["typ"]=='yr')

             	{	
             		for ($i=1; $i<=12 ; $i++) { 
        				$arg=$i.$_GET["year"];
             		$sql = "SELECT * FROM actualdata WHERE `id`= $arg";
        				$result = $conn->query($sql);
        			 if ($result->num_rows > 0) {
	             		while($row = $result->fetch_assoc()) {
	             		$rfc=$row['FC']; $r1a=$row['1AC'];$r2a=$row['2AC'];$r3a=$row['3AC'];$rac=$row['AC'];$rsl=$row['2S'];$r3e=$row['3E'];$rec=$row['EC'];
	                 		$data = array("FC"=>$row['FC']+$rfc, "1AC"=>$row['1AC']+$r1a,"2AC"=>$row['2AC']+$r2a,"3AC"=>$row['3AC']+$r3a,"AC"=>$row['AC']+$rac,"SL"=>$row['2S']+$rsl,"3E"=>$row['3E']+$r3e,"EC"=>$row['EC']+$rec);	}}
	             }
             	
             }}



             ?>
































     <div id='theatre'></h1><img src="generate.php?mydata=<?php echo urlencode(serialize($data)); ?>" /><br><br><br>
		<a href="index.php">Return to Menu</a>
     </div>

 <?php session_unset(); session_destroy(); ?>

  </body>	
<?php include 'php_includes/footer.php'; ?>
</html>