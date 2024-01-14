<?php 
session_start();
include "../baglanti.php";
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $users = "SELECT * FROM kullanicilar WHERE id = '$id' ";
  } else {
    echo "Kullanıcı Bulunamadı";
  }

  
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
    if ($query_run) {
        $_SESSION['kullanicilar_isim'] = $username;
            header('Location: adminindex.php?id='.$_SESSION['id']);
        exit(0);
    }
}


?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Admin Paneli</title>
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
    <div id="content">
    <div class="card-header">
         <h4>Kullanıcı Bilgileriniz
         </h4>
        </div>
        <div class="card-body">
        <?php 
         if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $users = "SELECT * FROM kullanicilar WHERE id = '$id' ";
            $query = mysqli_query($baglanti,$users);
        
            if(mysqli_num_rows($query) > 0 ) 
            {
                foreach($query as $user)
                {
                ?>
                    <form action="" method="POST" >
                        <input type="hidden" name="id" value="<?=$user['id'];?>">   
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="username">İsminiz</label> 
                                <input type="text"  name="kullanicilar_isim" value="<?=$user['kullanicilar_isim'];?>" class="form-control" id="username">  
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="surname">Soyisim</label> 
                                <input type="text"  name="kullanicilar_soyisim" value="<?=$user['kullanicilar_soyisim'];?>" class="form-control" id="surname">  
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="password">Şifreniz</label>
                                <input type="text" name="kullanicilar_sifre" value="<?=$user['kullanicilar_sifre'];?>" class="form-control" id="password">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="email">Emailiniz</label>
                                <input type="text" name="kullaniciler_mail" value="<?=$user['kullaniciler_mail'];?>" class="form-control" id="email" autocomplete="email">
                            </div>
                            <?php if ($user['role'] == 2) {?>
                                <div class="col-md-12 mb-3">
                                <label for="role">Yetkiniz</label>
                                <select name="role" required class="form-control" id="role">
                                    <option value="2" <?=$user['role'] == '2' ? 'selected':''?>>Moderatör</option>
                                </select>
                            </div>
                           <?php } elseif ($user['role'] == 1) {?>
                           <div class="col-md-12 mb-3">
                                <label for="role">Yetkiniz</label>
                                <select name="role" required class="form-control" id="role">
                                    <option value="">Yetki Seçiniz</option>
                                    <option value="0" <?=$user['role'] == '0' ? 'selected':'' ?>>Üye</option>
                                    <option value="1" <?=$user['role'] == '1' ? 'selected':'' ?> >Admin</option>
                                    <option value="2" <?=$user['role'] == '2' ? 'selected':'' ?>>Moderatör</option>
                                </select>
                            </div>
                         <?php  } ?>
                            
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="update_user" class="btn btn-primary"><i class="fa-solid fa-user-pen"></i> Güncelle</button>
                            </div>
                        </div>
                    </form>
            <?php
                }
            }
            else 
            {   
                ?>
                    <h4>Kayıtlı Kullanıcı Bulunamadı</h4>
                <?php

            }
         }
        
        ?>
</div>
</div>

</body>
</html>
