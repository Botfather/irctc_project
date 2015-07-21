  <h1>Ticket Booking Comparison</h1> <?php 
			 	for ($i=1; $i<=12 ; $i++) { 
			 	$arg1=$i.$_GET["year1"];
			  	$sql = "SELECT `TktsBkd` FROM actualdata WHERE `id`= $arg1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				 $hold1+=$row["TktsBkd"];}}} echo "<br>".$hold1;

        			$hold2=0; for ($i=1; $i<=12 ; $i++) { 
	 			  	$arg2= $i.$_GET["year2"];
				  	$sql = "SELECT `TktsBkd` FROM actualdata WHERE `id`= $arg2";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					   	 while($row = $result->fetch_assoc()) {
					      $hold2+=$row["TktsBkd"];}} } echo "<br>".$hold2;