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
