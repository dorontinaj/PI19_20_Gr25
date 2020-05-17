<?php
session_start();
$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['pass'])) {
        $error = "Emri ose fjalekalimi nuk jane ne rregull!";
    }
    else {
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $connect = mysqli_connect("localhost", "root", "Elira123-", "regjistrimi");
        $query = "SELECT username, password FROM perdoruesit WHERE username=? AND password=? LIMIT 1";
        // Mbrojtja ndaj MySQL injections
        $s = $connect->prepare($query);
        $salt = "SELECT salt FROM perdoruesit WHERE username = '$username'";
        $result = mysqli_query($connect,$salt);
        if($row = mysqli_fetch_assoc($result)){
              $salti = $row['salt'];
         }
        $password = MD5($password.$salti);
        $s->bind_param("ss", $username, $password);
        $s->execute();
        $s->bind_result($username, $password);
        $s->store_result();
        if ($s->fetch())
        {
            $_SESSION['login_user'] = $username;
            header("location: profile.php");
        }else{
            $error = "Keni shtypur emrin ose fjalekalimin gabim!";
        }
    }
    mysqli_close($connect);
}
?>
