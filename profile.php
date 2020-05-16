<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
    header("location: Kycu.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session and Cookies</title>
    <style>
        #profile
        {
            padding: 50px;
            border: 1px dashed grey;
            font-size: 20px;
            background-color: #909090;
        }
        #exit
        {
            float: right;
            padding: 5px;
            border: dashed 1px gray;
            color: #ab0e18;
        }
    </style>
</head>
<body>
<div id="profile">
    <b>Welcome : <i><?php echo ucwords($login_sesioni); ?></i></b>
    <b id="exit"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>