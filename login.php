<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styler-index.css">
    <link rel="stylesheet" type="text/css" href="css/styler-login.css">
    
  </head>
  <?php include 'php_includes/navbar.php'; ?>
  <body>
      <div class='mid content'>

           <div class="container">

  <div id="login-form">

    <h3>Update / Modify Login</h3>

    <fieldset>

      <form action="checklogin.php" method="post">

        <input type="email" placeholder='username' name='username'> 
        <input type="password" placeholder='password' name='password'>

        <input type="submit" value="Login">

        <footer class="clearfix">

          <p><span class="info">?</span>Contact Admin for <a href="#">Help</a></p>

        </footer>

      </form>

    </fieldset>

  </div> 

</div>
</div>

  
  </body> 
<?php include 'php_includes/footer.php'; ?>
</html>