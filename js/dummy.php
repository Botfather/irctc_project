<?php session_start(); 

include("graph/phpgraphlib.php");
$graph = new PHPGraphLib(680,300, "haha.png"); ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irctc_data";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Database Connectivity Error! Please report to admin." . $conn->connect_error);} 

$dataArray=array();

$hold1=0; $hold2=0;?><?php 
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


$data = array("April"=>$hold1, "May"=>$hold2);
$graph->setBackgroundColor("#B2B09B");
$graph->addData($data);
$graph->setBarColor("#FF6F59", "#43AA8B");
$graph->setBarOutlineColor("#43AA8B");
$graph->setTitle("Test Scores");
$graph->setTextColor("#FFFCDD");
$graph->setBarOutlineColor("#72C4FF");

$graph->createGraph();


?>