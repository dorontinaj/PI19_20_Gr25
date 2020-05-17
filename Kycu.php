<?php
include_once ('login.php');
if(isset($_SESSION['login_user'])){
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ky&ccedil;u</title>
    <link rel="stylesheet" href="css/Kycu.css">
  </head>
  <body>
<form class="login-box" action="" method="POST">
    <h1>Ky&ccedil;u</h1>

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Emri i p&euml;doruesit" name="username" required>
  </div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Fjal&euml;kalimi" name="pass" required>
  </div>

  <input type="submit" class="btn" value="Kycu" name="submit">
    <p style="color: #ab0e18;text-align: center;"><?php echo $error; ?></p>
    <a href="regjistrohu.php">Ende nuk posedoni nj&euml; llogari?</a>
</form>
  </body>
</html>
