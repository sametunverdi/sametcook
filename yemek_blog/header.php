<?php 
session_start();
require "baglanti.php";


if (!empty($_SESSION['kullanicilar_isim'])) {
    $username = $_SESSION['kullanicilar_isim'];

    if (isset($_SESSION['giris'])){

        $query = "SELECT * FROM kullanicilar WHERE kullanicilar_isim = ?";
        $stmt = $baglanti->prepare($query);
        //sorgu hazırlar
        $stmt->bind_param("s", $username);

        $stmt->execute();
        //sorgu gerçekleştirir
        if (!$stmt->execute()) {
            echo "Sorgu hatası: " . $stmt->error;
        }

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Kullanıcı bulunamadı";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Kanit:wght@700&family=Work+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="header.css?v=<?php echo time();?>">
    <title>Anasayfa | Sam-Et</title>
    
</head>
<body>
    <section id="menu">
        <div id="logo">Sam-Et</div>
        <nav>
        <?php 
                if (isset($_SESSION["giris"])) {?>
            <form action="cikis_yap.php" method="POST">
               <button type="submit" name="cikis" class="nav-link cikis">Çıkış Yap</button>
            </form>
            <?php } ?>
            <a href="index.php"><i class="fa fa-home ikon" aria-hidden="true"></i>Anasayfa</a>
            <a href="tarifler.php"><i class="fa fa-cutlery ikon" aria-hidden="true"></i>Tarifler</a>
            <?php 
                if (isset($_SESSION["giris"])) {?>
                    <a href="admin/adminindex.php?id=<?php echo $row['id']; ?>"><i class="fa fa-user-circle-o ikon" aria-hidden="true"></i>Admin</a>
                   <a href=" admin/adminindex.php?id=<?php echo $row['id']; ?>">
                    <?php echo $row['kullanicilar_isim']?></a>

              <?php  } else {?>
                <a href="giris.php"><i class="fa fa-sign-in ikon" aria-hidden="true"></i>Giriş Yap</a>
                <a href="kayit.php"><i class="fa fa-user-plus ikon" aria-hidden="true"></i>Kayıt Ol</a>
            <?php  }
            ?>


        </nav>



    </section>






</body>
</html>