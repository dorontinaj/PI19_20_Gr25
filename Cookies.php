<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Miresevini </title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
              
                <a class="navbar-brand" href="#">Miresevini!</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Dil</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <header class="jumbotron hero-spacer">
            <h1>Miresevini!</h1>

  <?php
//Kriimi i coookies me variabla si statike
$cookie_name='cookie';
$cookie_value='Elire Raci';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //Nje dite
//Kontrollimi a eshte vendos
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie nuk eshte krijuar<br>";
}else{
    echo "Eshte krijuar cookie me emrin: ".$cookie_name."<br>";
    echo "Vlera e cookies eshte:" . $_COOKIE[$cookie_name];"<br>";
}
//Fshierja e coookies
//setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/");
//echo " Cookie u fshi<br>";

//Ruajta ne varg e cookies
print_r($_COOKIE);
echo "<br>";
//Kontrollimi
if(count($_COOKIE) > 0) {
    echo "Cookies jane aktivizuar.<br><br>";
} else {
    echo "Cookies jane deaktivizuar.";
}
?>
        </header>
        <br><hr><br>	
        <br><hr><br>	
        <br><hr><br>	
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <footer>
<p> Copyright &copy; FIEK 2020 Grupi 25 - All rights reserved. </p>
</footer>
</body>

</html>
