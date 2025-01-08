<?php
try {
    // SQLite bağlantısı oluşturuluyor
    $baglan = new PDO("sqlite:projem.sqlite");

    // Hata modu ayarlanıyor
    $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "SQLite bağlantısı başarılı!";
} catch (PDOException $e) {
    // Hata durumunda mesaj yazdırılır
    echo "Bağlantı hatası: " . $e->getMessage();
}
?>
