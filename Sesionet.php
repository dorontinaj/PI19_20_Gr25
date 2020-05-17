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
session_start();
//Krijimi i sesioneve

$_SESSION['Anetari2']='Elire Raci';
$_SESSION['Anetari3']='Elsa Nishori';
//Override apo modifikim
$_SESSION['Anetari2']='Elire Raci';
echo "Sesionet u vendosen<br>";
if(count($_SESSION) > 0) {
    echo "Sesionet jane aktivizuar.<br><br>";
} else {
    echo "Sesionet jane deaktivizuar.";
}

echo "Anetari2:".$_SESSION['Anetari2']."<br>";
echo "Anetari3:".$_SESSION['Anetari3']."<br>";

print_r($_SESSION);
//I hjek te gjitha sesion variablat
// session_unset();
//E shkatrron sesionin
// session_destroy();
//echo "Te gjitha sesion variablat jane larguar,dhe sesionet jane shktarruar";
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
