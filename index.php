<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styler-index.css">
    <link rel="stylesheet" type="text/css" href="css/styler-accordian.css">
    <script type="text/javascript" src='js/redirect.js'></script>
  </head>
  <?php include 'php_includes/navbar.php'; ?>
  <body>

        <div id='master'>
            <h1>Menu</h1>
<ul>
  <li>
    <input type="checkbox" checked>
    <i></i>
    <h2>Reports</h2>
    <p>Please select the appropriate report type below. 
      
      <select id='hitter'>
            <option value="tbc">Ticket Booking Comparison</option>
            <option value="op">Operational Performance</option>
            <option value="mp">Monthwise Performance</option>
            <option value="cwtb">Classwise Ticket Booking</option>
            <option value="itbs">Internet Ticket Booking Stats</option>
            <option value="mii">Monthwise IRCTC Income</option>
      </select> <button id='gen' onclick= 'myredirect();'>Generate</button>
    </p>
  </li>

  <li>
    <input type="checkbox" checked>
    <i></i>
    <h2>Updation and Modification</h2>
    <p>You are not allowed to make changes to the data. Please <a href="login.php">login</a> to update and modify or contact the administrator.</p>
  </li>
  <li>
    <input type="checkbox" checked>
    <i></i>
    <h2>Test Beta</h2>
    <p>Everything related to my report goes here!</p>  </li>
</ul>


        </div>
      
  </body>	
<footer class="clearfix" style="margin-top: 20px;text-align: center; postition: fixed;">
          <p> Developed for <b>IRCTC</b> | Summer Internship 2015</p>
</footer>

</html>