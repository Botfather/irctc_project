?><?php 
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
				     else { echo "<br> No entries found corresponding to argument 2 :(";}