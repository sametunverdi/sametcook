<?php 
session_start();
include("../baglanti.php");

if (isset($_POST["update_user"])) {
    $id = $_POST["id"];
    $username = $_POST["kullanicilar_isim"];
    $surname = $_POST["kullanicilar_soyisim"];
    $password = $_POST["kullanicilar_sifre"];
    $email = $_POST["kullaniciler_mail"];
    $role = $_POST["role"];

    $query = "UPDATE kullanicilar SET kullanicilar_isim='$username', kullanicilar_soyisim='$surname', kullanicilar_sifre='$password', kullaniciler_mail='$email', role='$role' 
    WHERE id='$id'";
    $query_run = mysqli_query($baglanti,$query);
    $row = mysqli_fetch_assoc($query_run);
    if ($query_run) {
        $_SESSION['kullanicilar_isim'] = $row['kullanicilar_isim'] ;
        header('Location: adminindex.php?id='.$_SESSION['id']);
        exit(0);
    }
}
?>