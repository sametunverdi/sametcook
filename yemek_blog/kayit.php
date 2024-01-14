<?php

include ("baglanti.php");

if(isset($_POST["kullanicikaydet"]))
{
    $ad=$_POST["kullaniciadi"];
    $soyad=$_POST["kullanicisoyadi"];
    $mail=$_POST["kullaniciemail"];
    $sifre=$_POST["kullanicisifre"];

    $ekle="INSERT INTO kullanicilar (kullanicilar_isim,kullanicilar_soyisim,kullaniciler_mail,kullanicilar_sifre) VALUES ('$ad','$soyad','$mail','$sifre')";
    //sorgu çalıştır
    $calistirekle = mysqli_query($baglanti,$ekle);

    if ($calistirekle) {
      header("Location: giris.php");
      exit(0);
    }
    else{
        echo '<div class="alert alert-danger" role="alert">
        Kaydınız eklenirken bir hata oluştu.
      </div>';
    }

    mysqli_close($baglanti);


}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url(img/indir.jpg) center center/cover no-repeat;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            background-color: #CFD8DC	;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #1E90FF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .container {
            text-align: center;
        }

        p {
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <form action="kayit.php" method="POST">
        <h2>Kayıt Ol</h2>
        <label for="fname">İsim:</label>
        <input type="text" id="fname" name="kullaniciadi" required>

        <label for="lname">Soyisim:</label>
        <input type="text" id="lname" name="kullanicisoyadi" required>

        <label for="email">E-posta:</label>
        <input type="email" id="email" name="kullaniciemail" required>

        <label for="password">Şifre:</label>
        <input type="password" id="password" name="kullanicisifre" required>

        <button type="submit" name="kullanicikaydet">Kayıt Ol</button>

        
    </form>

   

</body>
</html>
