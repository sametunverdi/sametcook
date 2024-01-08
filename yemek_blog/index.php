<?php

include("baglanti.php");
ob_start();

if(isset($_POST["sikayet"]))
{
    $name=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $sms=$_POST["mesaj"];

    

    $sikayetekle="INSERT INTO sikayet (sikayetisim,sikayettel,sikayetmail,sikayetkonu,sikayetmesaj) VALUES ('$name','$telefon','$email','$konu','$sms')";
    $sikayetekle = mysqli_query($baglanti,$sikayetekle);

    if ($sikayetekle) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Mesajınız Alınmıştır!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    else{
        echo '<div class="alert alert-danger" role="alert">
        Mesajınız gönderilemedi.
      </div>';
    }
ob_end_flush();

    mysqli_close($baglanti);


}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | Sam-Et</title>
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css?v=<?php echo time();?>">
</head>
<body>
    <?php include "header.php" ?>



    <section id="anasayfa">
        <div id="black">

        </div>
        <div id="icerik">
            <h2>Sam-Et</h2>
            <hr width="200" text-align="left">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ipsa temporibus sed voluptatem maiores blanditiis officiis sunt provident, et itaque voluptatum distinctio sapiente eius magni recusandae beatae explicabo suscipit molestiae. </p>
        </div>
    </section>
      
    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h5>
                
            </div>

            <div id="sag">
                <span>L</span>
                <p id="psag">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, nobis. Veritatis explicabo, magnam animi rerum ut, facere in quidem porro nobis libero error cum! Laudantium iure sed illo necessitatibus consectetur?                   
                </p>
            </div>

            <img src="img/bb.jpg" alt="">


            <p id="son">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aliquid possimus repellendus dolorum veniam incidunt aliquam pariatur et similique, rerum odit, provident quasi hic doloremque aut officiis est. Quam, assumenda!
            </p>
    

        </div>
    </section>

    <section id="trendyemek">
        <div id="duzen">
            <h2>Trend Tarifler</h2>
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge=1.5>
                    <img src="img/c.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Donut</h5>
                    <p class="cardp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, quos.</p>
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/c.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Donut</h5>
                    <p class="cardp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, quos.</p>
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/c.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">Donut</h5>
                    <p class="cardp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, quos.</p>
                </div>



            </div>
        </div>
    </section>


    <section id="sefler">
        <div id="sefconta">
            <h3 id="seflerh3">ŞEFLER</h3>

            <div class="sutun-sol-sag">
                <img src="img/melo.jpg" alt="" class="img-fluid oval">
                <h4 class="seflerisim">Felipe Melo</h4>
                <p class="seflerp">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, voluptas?
                </p>

                <div class="sefler-ikon">
                    <a href="#"><i class="fa fa-facebook ikonn"></i></a>
                    <a href="#"><i class="fa fa-twitter ikonn"></i></a>
                    <a href="#"><i class="fa fa-youtube-play ikonn"></i></a>
                </div>
            </div>

            <div class="sutun">
                <img src="img/vesikalikterim.jpg" alt="" class="img-fluid oval">
                <h4 class="seflerisim">Fatih Terim</h4>
                <p class="seflerp">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, voluptas?
                </p>

                <div class="sefler-ikon">
                    <a href="#"><i class="fa fa-facebook ikonn"></i></a>
                    <a href="#"><i class="fa fa-twitter ikonn"></i></a>
                    <a href="#"><i class="fa fa-youtube-play ikonn"></i></a>
                </div>
            </div>

            <div class="sutun-sol-sag">
                <img src="img/icardii.png" alt="" class="img-fluid oval">
                <h4 class="seflerisim">Mauro İcardi</h4>
                <p class="seflerp">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, voluptas?
                </p>

                <div class="sefler-ikon">
                    <a href="#"><i class="fa fa-facebook ikonn"></i></a>
                    <a href="#"><i class="fa fa-twitter ikonn"></i></a>
                    <a href="#"><i class="fa fa-youtube-play ikonn"></i></a>
                </div>
            </div>



        </div>









    </section>

  




    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İstek ve Şikayet</h3>
                <form action="index.php" method="POST">
                    <div id="iletisimopak">
                        <div id="formgroup">
                            <div id="solform">
                                <input type="text" name="isim" placeholder="Ad ve Soyad" required class="form-control">
                                <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                            </div>
                            <div id="sagform">
                                <input type="email" name="mail" placeholder="e-mail giriniz" required class="form-control">
                                <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                            </div>

                            <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>
                            
                            <input type="submit" name="sikayet" value="Gönder">

                        </div>

                        <div id="adres"></div>


                    </div>
                </form>
            



        </div>



    </section>



<script
  src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous">
</script>
<script src="owl.carousel.js"></script>
<script src="script.js"></script>
</body>
</html>