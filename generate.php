<?php
include("graph/phpgraphlib.php");
$graph=new PHPGraphLib(800,600);
$data = unserialize(urldecode(stripslashes($_GET['mydata'])));
$graph->setBackgroundColor("#B2B09B");
$graph->addData($data);
$graph->setBarColor("#FF6F59", "#43AA8B");
$graph->setBarOutlineColor("#43AA8B");
$graph->setTitle("Comparisons-IRCTC");
$graph->setTextColor("blue");
$graph->setTextColor("#FFFCDD");
$graph->setBarOutlineColor("#72C4FF");
$graph->createGraph();
?>

