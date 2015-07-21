<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styler-index.css">
    <link rel="stylesheet" type="text/css" href="css/styler-report.css">
   </head>
  <?php include 'php_includes/navbar.php';?>
  
  <body>
  	<div class='selective'>
		<?php if(!isset($_GET["type"]))
		$_SESSION["mode"] = "itbs";
			{ ?>
		<div id='monyea'>
			<fieldset>
					<legend>Step 1:</legend>
			<div id='title'>

				<h1>Please select the type of report required:</h1>
			</div>
			<form id='yrmn' action='stage2.php' method='GET'>
				 <input type="radio" id="radio01" name="type" value='mh' /> <label for="radio01"><span></span>Monthly</label>
				 <input type="radio" id="radio02" name="type" value='yr' /> <label for="radio02"><span></span>Yearly</label><br><br>
				<div id='aligner'><input type='submit' value='Proceed'></div>
			</form>
			</fieldset>
		</div>
		
			<?php } ?>
		

  	</div>
     
  </body>	
   <footer class="clearfix" style="margin-top: 260px;text-align: center; postition: fixed;">
          <p> Developed for <b>IRCTC</b> | Summer Internship 2015</p>
</footer>

</html>
