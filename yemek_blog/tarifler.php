<?php include "header.php";


if(isset($_POST["yorum1"]))
{
    $mesaj1=$_POST["mesaj1"];
    

    $yorumyap1 = mysqli_query($baglanti,"INSERT INTO yorum (yemek1) VALUES ('$mesaj1')");
}
if(isset($_POST["yorum2"]))
{
    $mesaj2=$_POST["mesaj2"];
    

    $yorumyap2 = mysqli_query($baglanti,"INSERT INTO yorum (yemek2) VALUES ('$mesaj2')");
}

if(isset($_POST["yorum3"]))
{
    $mesaj3=$_POST["mesaj3"];
    

    $yorumyap3 = mysqli_query($baglanti,"INSERT INTO yorum (yemek3) VALUES ('$mesaj3')");
}
if(isset($_POST["yorum4"]))
{
    $mesaj4=$_POST["mesaj4"];
    

    $yorumyap4 = mysqli_query($baglanti,"INSERT INTO yorum (yemek4) VALUES ('$mesaj4')");
}

?>




<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifleri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #F5FFFA	;
        }
    </style>

</head>
<body>

            
    


    <div class="container my-5 rounded " style="background-color: #FF000017	;">
        <div class="row">
            <div class="col-md-7">
                    <img src="img/hamburger.jpg" width="600" height="600" class="rounded-5" alt="...">
            </div>
                    <div class="col-md-5 my-5">
                        <h5 class="">Adana Kebap</h5>
                        <p class="">Bu kartın içeriği burada.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis a ullam quam! Tempore molestias tempora vel soluta, laudantium minima itaque illo necessitatibus inventore neque delectus voluptates! Aliquam rem dolore totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis a ullam quam! Tempore molestias tempora vel soluta, laudantium minima itaque illo necessitatibus inventore neque delectus voluptates! Aliquam rem dolore totam.</p>
                        <form action="" method="post">
                        <textarea name="mesaj1" id="" cols="30" placeholder="Mesaj Giriniz" rows="4" required class="form-control"></textarea>
                        <button name="yorum1" class="btn btn-primary btn-color my-3">Gönder</button>
                    </form>
                    </div>
                </div>
            </div>
    
        </div>   
    </div>

    <div class="container my-5 rounded " style="background-color: #FF000017	;">
        <div class="row">
            <div class="col-md-7">
                    <img src="img/dilim.jpg" width="600" height="600" class="rounded-5" alt="...">
            </div>
                    <div class="col-md-5 my-5">
                        <h5 class="">Adana Kebap</h5>
                        <p class="">Bu kartın içeriği burada.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis a ullam quam! Tempore molestias tempora vel soluta, laudantium minima itaque illo necessitatibus inventore neque delectus voluptates! Aliquam rem dolore totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis a ullam quam! Tempore molestias tempora vel soluta, laudantium minima itaque illo necessitatibus inventore neque delectus voluptates! Aliquam rem dolore totam.</p>
                        <form action="" method="post">
                        <textarea name="mesaj2" id="" cols="30" placeholder="Mesaj Giriniz" rows="4" required class="form-control"></textarea>
                        <button name="yorum2" class="btn btn-primary btn-color my-3">Gönder</button>
                    </form>
                    </div>
                </div>
            </div>
    
        </div>   
    </div>

    <div class="container my-5 rounded " style="background-color: #FF000017	;">
        <div class="row">
            <div class="col-md-7">
                    <img src="img/sushi.jpg" width="600" height="600" class="rounded-5" alt="...">
            </div>
                    <div class="col-md-5 my-5">
                        <h5 class="">Adana Kebap</h5>
                        <p class="">Bu kartın içeriği burada.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis a ullam quam! Tempore molestias tempora vel soluta, laudantium minima itaque illo necessitatibus inventore neque delectus voluptates! Aliquam rem dolore totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis a ullam quam! Tempore molestias tempora vel soluta, laudantium minima itaque illo necessitatibus inventore neque delectus voluptates! Aliquam rem dolore totam.</p>
                        <form action="" method="post">
                        <textarea name="mesaj3" id="" cols="30" placeholder="Mesaj Giriniz" rows="4" required class="form-control"></textarea>
                        <button name="yorum3" class="btn btn-primary btn-color my-3">Gönder</button>
                    </form>
                    </div>
                </div>
            </div>
    
        </div>   
    </div>

    <div class="container my-5 rounded " style="background-color: #FF000017	;">
        <div class="row">
            <div class="col-md-7">
                    <img src="img/steak.jpg" width="600" height="600" class="rounded-5" alt="...">
            </div>
                    <div class="col-md-5 my-5">
                        <h5 class="">Adana Kebap</h5>
                        <p class="">Bu kartın içeriği burada.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis a ullam quam! Tempore molestias tempora vel soluta, laudantium minima itaque illo necessitatibus inventore neque delectus voluptates! Aliquam rem dolore totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis a ullam quam! Tempore molestias tempora vel soluta, laudantium minima itaque illo necessitatibus inventore neque delectus voluptates! Aliquam rem dolore totam.</p>
                        <form action="" method="post">
                        <textarea name="mesaj4" id="" cols="30" placeholder="Mesaj Giriniz" rows="4" required class="form-control"></textarea>
                        <button name="yorum4" class="btn btn-primary btn-color my-3">Gönder</button>
                    </form>
                    </div>
                </div>
            </div>
    
        </div>   
    </div>

</body>
</html>
