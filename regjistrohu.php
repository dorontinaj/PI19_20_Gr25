<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="regjistrohu.css" type="text/css">
<style>
.error {color: #ab0e18;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $passwordErr = $confirmpasswordErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["confirmpassword"])) {
    $password = test_input($_POST["password"]);
    $confirmpassword = test_input($_POST["confirmpassword"]);
    if (strlen($_POST["password"]) <= '8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
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
} else {
     $passwordErr = "Please enter password   ";
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<div class="body-content">
  <div class="module">
    <h1>Regjistrohu</h1>
    <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Emri" name="username"  />
      <span class="error">* <?php echo $nameErr;?> </span><br><br>
      <input type="email" placeholder="Email" name="email" />
      <span class="error">* <?php echo $emailErr;?> </span><br><br>
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" />
      <span class="error">* <?php echo $passwordErr;?> </span><br><br>
      <input type="password" placeholder="Konfirmoni Password-in" name="confirmpassword" autocomplete="new-password"  />
      <span class="error">* <?php echo $confirmpasswordErr;?> </span> <br><br>
      <div class="avatar"><label>Select your profile: </label><input type="file" name="avatar" accept="image/*" /></div>
      <input type="submit" value="Regjistrohu" name="register" class="btn btn-block btn-primary" />
    
    </form>
  </div>
</div>
</body>
</html>
