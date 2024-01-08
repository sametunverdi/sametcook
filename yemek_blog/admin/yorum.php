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

    <title>Yorumlar</title>
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
        <a href="#" class="menu-item">Yorumlar</a>
        
    </div>
    <div id="content">
    <div class="card-header">
         <h4>Yorumlar
         </h4>
        </div>
        <div class="card-body">
        <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Yemek-1</th>
        <th scope="col">Yemek-2</th>
        <th scope="col">Yemek-3</th>
        <th scope="col">Yemek-4</th>
        </tr>
    </thead>
    <tbody>
<?php
$sql = mysqli_query($baglanti,"SELECT * FROM yorum"); 
if ($sql) {
    foreach ($sql as $value) {
?>       
        <tr>
        <td><?php print $value['id']; ?></td>
        <td><?php print $value['yemek1']; ?></td>
        <td><?php print $value['yemek2']; ?></td>
        <td><?php print $value['yemek3']; ?></td>
        <td><?php print $value['yemek4']; ?></td>
        </tr>
        <tr>
<?php } } ?>
    </tbody>
    </table>
        </div>
</div>

</body>
</html>














