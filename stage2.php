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
	
			
				<?php if ($_GET["type"]=='mh') { ?>
			
			<div id='datesel'>
				<fieldset>
					<legend>Step 2:</legend>
			<div id='title'>

				<h1>Please select the range(s) of report required:</h1>
			</div>
				<form  action='stage3.php' method='GET' class='options'>
					<div id='left-pane'> <label>Argument 1</label>
					<select name='month1'>
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

					<select  name='year1'>
					            <option value="14">2014</option>
					            <option value="15">2015</option>
					        </select>
					        </div>
					        <div id='right-pane'><label>Argument 2</label>
					<select name='month2'>
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
					<select  name='year2'>
					            <option value="14">2014</option>
					            <option value="15">2015</option>
					        </select></div>
					       <br>
					      <input type='submit' value='Show' id='aligner3'>
				</form>
				</fieldset>
		</div>
			</div>

			<?php $_SESSION["controller"]=1; } ?>

			<?php if ($_GET["type"]=='yr') { ?>
				<div id='datesel'>	<fieldset>
					<legend>Step 2:</legend>
			<div id='title'>

				<h1>Please select the range(s) of report required:</h1>
			</div>
				<form  action='stage3.php' method='GET' class='options'>
					<label>Argument 1</label>
				<select  name='year1'>
					            <option value="14">2014</option>
					            <option value="15">2015</option>
					        </select>
					 <label>Argument 2</label>
					        <select  name='year2'>
					            <option value="14">2014</option>
					            <option value="15">2015</option>
					        </select><br><br>
					       <input type='submit' value='Show' class='aligner2'>
				</form>
				</div>
		<?php $_SESSION["controller"]=2; } ?>

  	</div>
      
  </body>	
<footer class="clearfix" style="margin-top: 245px;text-align: center; postition: fixed;">
          <p> Developed for <b>IRCTC</b> | Summer Internship 2015</p>
</footer>
</html>