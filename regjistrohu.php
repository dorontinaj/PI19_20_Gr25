<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="css/regjistrohu.css" type="text/css">
 <!-- Insertimi i ikones(logos) ne title bar -->
<link rel = "shortcut icon" type = "image/png" href = "photos/llogoja.png">
<title>Regjistrohu</title>
<style>
.error {color: #ab0e18;}
</style>
</head>
<body>
<?php
// definimi variablave dhe inicializimi si empty stringje
$nameErr = $emailErr = $passwordErr = $confirmpasswordErr = "";
$name = $email = $password = $confirmpassword= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  function test_input($str){
    return trim(htmlspecialchars($str));
}
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["username"]);
    // Kontrolla se a e permban emri numra dhe whitespace.
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // kontrollo se a eshte email valid
    $regex="/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-zA-Z\d\.]{2,}+$/";
    if (!preg_match($regex,$email)) {
      $emailErr = "Invalid email format";
    }
  }
  if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["confirmpassword"])) {
    $password = test_input($_POST["password"]);
    $confirmpassword = test_input($_POST["confirmpassword"]);
    if (strlen($_POST["password"]) <= '6') {
        $passwordErr = "Your Password Must Contain At Least 6 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
}
elseif(!empty($_POST["password"])) {
    $confirmpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
}
elseif($_POST["password"] != $_POST["confirmpassword"]) {
    $confirmpasswordErr="The passwords do not match!";
}
else {
     $passwordErr = "Please enter password   ";
}
if(empty($nameErr) && empty($emailErr) && empty($passwordErr)) {
  //--------------------------------------------------------------------------------------//
  //Database
  //Krijimi i lidhjes
  $con = mysqli_connect('localhost','root','');
  if(!$con)
  {
      echo 'Nuk jeni lidhur me serverin!';
  }
  if(!mysqli_select_db($con,'regjistrimi'))
  {
      echo "Databaza nuk eshte selektuar me rregull";
  }
  $Emri = $_POST['username'];
  $Email = $_POST['email'];
  $Fjalekalimi = $_POST['password'];
   //Krijimi i Databazes
  $sql='CREATE DATABASE regjistrimi';
  //Krijimi i Tabeles
  $sql='CREATE TABLE users(id INT(11)UNSIGNED AUTO_INCREMENT PRIMARY KEY,username VARCHAR(255) , UNIQUE(email) VARCHAR(255) ,password VARCHAR(255),salt VARCHAR(255));';
  //INSERTIMET
  $salti = random_bytes(12);
  $salti = base64_encode($salti);
  $sql = "INSERT INTO perdoruesit (username,email,password,salt) VALUES ('$Emri','$Email',MD5('$Fjalekalimi$salti'),'$salti')";

  $rez = mysqli_query($con,$sql);
  //UPDATE
  if(!$rez){
      echo "<h3>Nuk jeni regjistruar me sukses. Emaili i shenuar egziston,ju lutem shenoni tjeter email!</h3>";
  }
  else{
       echo "<h3>Jeni regjistruar me sukses. Klikoni <a href='Kycu.php'><b>ketu</b></a> per tu kycur </h3>";
  }
  exit();
}
}
?>
<div class="body-content">
  <div class="module">
    <h1>Regjistrohu</h1>
    <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Emri" name="username" value="<?= $name?>" />
      <span class="error">* <?php echo $nameErr;?> </span><br><br>
      <input type="text" placeholder="Email" name="email" value="<?= $email ?>"/>
      <span class="error">* <?php echo $emailErr;?> </span><br><br>
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" value="<?= $password?>"/>
      <span class="error">* <?php echo $passwordErr;?> </span><br><br>
      <input type="password" placeholder="Konfirmoni Password-in" name="confirmpassword" autocomplete="new-password" value="<?= $confirmpassword?>" />
      <span class="error">* <?php echo $confirmpasswordErr;?> </span> <br><br>
      <input type="submit" value="Regjistrohu" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</body>
</html>
