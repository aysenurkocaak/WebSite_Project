<?php
$adsoyad = $_POST["adsoyad"];
$eposta = $_POST["eposta"];
$mesaj = $_POST["mesaj"];

$konu = "Yeni Mesaj";
$kime = "aysenur.kocakk2002@gmail.com";
$ustbilgi = "From: $eposta\r\n";
$ustbilgi .= "Reply-To: $eposta\r\n";
$ustbilgi .= "X-Mailer: PHP/".phpversion();

if (mail($kime, $konu, $mesaj, $ustbilgi)) {
    echo "<script> window.location.href = 'index.php'; </script>";
} else {
    echo "<script> alert('HATA: Mesaj Gönderilemedi!'); window.location.href = 'index.php'; </script>";
}
?>
