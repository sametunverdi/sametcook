<?php

session_start();

          require "baglanti.php";
          if (isset($_POST['giris'])) {
            $mail = $_POST['kullaniciemail'];
            $sifre =$_POST["kullanicisifre"];
            $result = mysqli_query($baglanti, "SELECT * FROM kullanicilar WHERE kullaniciler_mail = '$mail'");
            //giris yapan kullanıcının bütün bilgilerini çeker
            $row = mysqli_fetch_assoc($result);

            if (mysqli_num_rows($result) > 0) {
              if ($sifre == $row['kullanicilar_sifre']) {
                
                $_SESSION['role'] = $row['role'];
                $_SESSION["giris"] = true;
                $_SESSION['kullanicilar_isim'] = $row['kullanicilar_isim'];
                $_SESSION['kullanicilar_soyisim'] = $row['kullanicilar_soyisim'];

                $_SESSION['id'] = $row['id'];
                
                
                if ($row['role'] == '0') { //üye
                    echo '<div class="alert alert-success" role="alert">
                    Başarılı bir şekilde giriş yapılmıştır.
                  </div>';
                  header('Location: index.php');
                  exit(0);
                  
                }
                elseif ($row['role'] == '1') {  //admin
                    echo '<div class="alert alert-success" role="alert">
                    Başarılı bir şekilde giriş yapılmıştır.
                  </div>';
                  header('Location: admin/adminindex.php?id='.$row['id']);
                  exit(0);

                }
                
                elseif ($row['role'] == '2') { //editör
                    echo '<div class="alert alert-success" role="alert">
                    Başarılı bir şekilde giriş yapılmıştır.
                  </div>';
                  header('Location: ../admin/index.php?id=' . $row["id"]);
                  exit(0);

                }
                $_SESSION["id"]= $id;
                $_SESSION["role"] = $role;
              }
              else {
                echo '<div class="alert alert-success" role="alert">
                    Kullanıcı adı yada şifre hatalıdır.
                  </div>';
              }
              
            }
            else{
                echo '<div class="alert alert-success" role="alert">
                Kaydınız Bulunamamaktadır.
              </div>';

            }
          }
          ?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('img/giris.jpg') center center/cover no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
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

    <form method="POST">
        <h2>Giriş Yap</h2>

        <label for="email">E-posta:</label>
        <input type="email" id="email" name="kullaniciemail" required>

        <label for="password">Şifre:</label>
        <input type="password" id="password" name="kullanicisifre" required>

        <button type="submit" name="giris" >Giriş Yap</button>

        
    </form>

    

</body>
</html>
