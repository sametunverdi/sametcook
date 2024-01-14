<?php 
require "../baglanti.php";
session_start();

?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Tarif Ekle</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        #admin-panel {
            display: flex;
            height: 100vh;
        }

        #sidebar {
            width: 200px;
            background-color: #333;
            color: #fff;
            padding-top: 20px;
        }

        #content {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        .menu-item {
            padding: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #555;
            text-decoration: none;
            color: #fff;
            display: block;
        }

        .menu-item:hover {
            background-color: #555;
        }

        #branding {
            text-align: center;
            padding: 40px;
            background-color: #333;
            color: #fff;
        }

        /* Eklenen Stil */
        #content h2 {
            margin-bottom: 20px;
        }

        #content form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #content form label {
            display: block;
            margin-bottom: 8px;
        }

        #content form input,
        #content form textarea,
        #content form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #content form button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        #content form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div id="admin-panel">  
    <div id="sidebar">
        <div id="branding">
            <?php echo "Hoşgeldin ".$_SESSION['kullanicilar_isim'];?>
        </div>
      
        <a href="../index.php" class="menu-item">Anasayfa</a>
        <a href="administek.php" class="menu-item">İstek ve Şikayet</a>
        <a href="yorum.php" class="menu-item">Yorumlar</a>
        <a href="tarif.php" class="menu-item">Tarif Ekle</a>
        <a href="kullanicitable.php" class="menu-item">Kayıtlı Kullanıcılar</a>

    </div>

    <!-- Tarif Ekleme Formu -->
    <div id="content">
        <h2>Tarif Ekle</h2>
        <form action="tarif.php" method="post" enctype="multipart/form-data">
            <label for="yemek_adi">Yemek Adı:</label>
            <input type="text" name="yemek_adi" required>

            <label for="yemek_tarifi">Yemek Tarifi:</label>
            <textarea name="yemek_tarifi" rows="4" required></textarea>

            <label for="yemek_resmi">Yemek Fotoğrafı:</label>
            <input type="file" name="image" accept="image/*" required>

            <button name="tarif" type="submit">Tarifi Ekle</button>
        </form>
    </div>
</div>

</body>
</html>


<?php

if (isset($_POST["tarif"]) && isset($_FILES['image'])) {
    $title = $_POST["yemek_adi"];
    $description = $_POST["yemek_tarif"];

    $img_name = $_FILES["image"]["name"];
    $img_size = $_FILES["image"]["size"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $error = $_FILES["image"]["error"];


    if ($error === 0) {
        if ($img_size > 10000000) {
            $_SESSION['message'] = 'Fotoğrafın boyutu çok yüksek!.';
            header("Location: add-card.php");
            exit(0);
        }
        else {
            $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg","jpeg","png");

            if (in_array($img_ex_lc,$allowed_exs)){
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = '../img/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
            }else{
                $_SESSION['message'] = 'Yanlış Dosya Türü!';
                header('Location: add-card.php');
                exit(0);
            }
        }
        
    }
    else{
        $_SESSION['message'] = 'Bilinmeyen Bir hata oluştu.';
        header('Location: add-card.php');
        exit(0);
    }



     $query = "INSERT INTO tarifler (yemek_adi,yemek_tarif,yemek_gorsel) VALUES ('$title','$description','$new_img_name')";
     $query_run = mysqli_query($baglanti, $query);
     if ($query_run){
         $_SESSION['message'] = "Kart Başarılı bir şekilde eklenmiştir.";
         header("Location:view_cards.php");
         exit(0);
    }
}

?>