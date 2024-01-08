<?php 
require "baglanti.php";
session_start();
if (isset($_POST["cikis"])) {
    unset($_SESSION["giris"]);
    unset($_SESSION["role"]);
    unset($_SESSION["kullanicilar_isim"]);

    echo '<div class="alert alert-danger" role="alert">
    Çıkış Yapılmıştır.
  </div>';
    header("Location: index.php");
    exit(0);
}
?>