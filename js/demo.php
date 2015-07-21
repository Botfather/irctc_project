<?php session_start(); ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irctc_data";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Database Connectivity Error! Please report to admin." . $conn->connect_error);} ?>
  <body>
    
    
        <?php if ($_SESSION["controller"]=='1') 
          { if($_SESSION["mode"]=='tbc')
          { $hold1=0; $hold2=0;?><?php 
       $arg1= $_GET["month1"].$_GET["year1"]; echo $arg1;
        echo "<h1>Registered " . $_SESSION["mode"] . "</h1>";
          $sql = "SELECT `TktsBkd` FROM actualdata WHERE `id`= $arg1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $hold1=$row["TktsBkd"];}} 
               else { echo "No entries found corresponding to argument 1 :(";} 
        $arg2= $_GET["month2"].$_GET["year2"];
          $sql = "SELECT `TktsBkd` FROM actualdata WHERE `id`= $arg2";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $hold2=$row["TktsBkd"];}} 
             else { echo " No entries found corresponding to argument 2 :(";} }






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
                 $hold1+=$row["TktsBkd"];}}} echo $hold1;

              $hold2=0; for ($i=1; $i<=12 ; $i++) { 
            $arg2= $i.$_GET["year2"];
            $sql = "SELECT `TktsBkd` FROM actualdata WHERE `id`= $arg2";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                $hold2+=$row["TktsBkd"];}} } echo $hold2;}








      }  ?>
     
