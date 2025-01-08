
<?php
include("ayar.php");
if($_SESSION["giris"]  != sha1(md5("var"))  ||  $_COOKIE["kullanici"] != "msb"){
    header("Location: cikis.php");
}
if ($_POST) {
    $aciklama = $_POST["aciklama"];
    $sorgu = $baglan->exec("delete from aboutus");
    $sorgu = $baglan->exec("insert into aboutus (aciklama) values ('$aciklama')");
    echo "<script> window.location.href='aboutus.php'; </script>";
}

$sorgu = $baglan->exec("select * from aboutus");
$satir = $sorgu->fetchArray(SQLITE3_ASSOC)();


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yönetim Paneli AboutUs</title>
</head>
<body style="text-align: center; padding-top:50px">

<div style="text-align: center">
    <a href="anasayfa.php">Home</a> - <a href="aboutus.php">AboutUs</a>
    - <a href="services.php">Services</a> - <a href="cikis.php" onclick="if (!confirm('Çıkış Yapmak İstediğinize Eminmisiniz?'))return false;">ÇIKIŞ</a>
    <br><br><br><br>     /* click özelligi yanlıslıkla cikisa basarsak uyari vermesi icin js kullandim.*/
</div>

<form action=" " method="post">
    <b>İçerik:</b><br><br>
    <textarea style="width: 50%; 200px "> </textarea><br><br>
        <input type="submit" value="Kaydet">
</form>

</body>
</html>
