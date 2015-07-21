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
		$_SESSION["mode"] = "cwtb";
			{ ?><div id='datesel'>
		<form  action='stage3.php' method='GET' class='options'>
					<div id='left-pane'> <label>Argument</label>
					<select name='month'>
								<option value="1">January</option>
					            <option value="2">February</option>
					            <option value="3">March</option>
					            <option value="4">April</option>
					            <option value="5">May</option>
					            <option value="6">June</option>
					            <option value="7">July</option>
					            <option value="8">August</option>
					            <option value="9">September</option>
					            <option value="10">October</option>
					            <option value="11">November</option>
					            <option value="12">December</option>
					</select>

					<select  name='year'>
					            <option value="14">2014</option>
					            <option value="15">2015</option>
					        </select><br><br>
					      <input type="radio" id="radio01" name="typ" value='mh' /> <label for="radio01"><span></span>Monthly</label>
				 <input type="radio" id="radio02" name="typ" value='yr' /> <label for="radio02"><span></span>Yearly</label>
					         <input type='submit' value='Show' id='aligner3'>  </div>

				</form>
		</div>
			<?php $_SESSION["controller"]=3; } ?>

  	</div>
     
  </body>	
   <footer class="clearfix" style="margin-top: 260px;text-align: center; postition: fixed;">
          <p> Developed for <b>IRCTC</b> | Summer Internship 2015</p>
</footer>

</html>
