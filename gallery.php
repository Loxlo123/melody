<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="scripts/hystmodal/style.css">
    <link rel="stylesheet" href="scripts/hystmodal/hystmodal.css">
    <link rel="stylesheet" href="styles/gallery.css">
    <title>Gallery</title>
</head>
<body>
    
    <!-- Header -->

    <div class="social">
        <img class="social-icon" src="images/vk.svg" alt="">
        <img class="social-icon" src="images/yt.svg" alt="">
        <img class="social-icon" src="images/tt.svg" alt="">
        <img class="social-icon" src="images/tg.svg" alt="">
    </div>
    <div class="small-main" style="height: 600px;">
        <header class="header">
            <a href="index.php"><button class="button-passive">Главная</button></a>
            <a href="teachers.php"><button class="button-passive" style="margin-left: 120px;">Преподаватели</button></a>
            <a href="gallery.php"><button class="button" style="margin-left: 220px;">Галерея</button></a>
            <a href="reg.php"><button class="button-passive" style="margin-left: 120px;">Профиль</button></a>
        </header>
        <div style="text-align: center;">
            <img class="main-logo"src="images/Logo.svg" alt="">
        </div>
    </div>

    <!-- End Header -->

    <!-- Gallery -->

    <div class="headline">
        <h2>Галерея</h2>
        <div class="line"></div>
    </div>
    <div class="gallery">
        <div class="photo"><img src="images/photo.png" alt=""></div>
        <div class="photo"><img src="images/photo.png" alt=""></div>
        <div class="photo"><img src="images/photo.png" alt=""></div>
        <div class="photo"><img src="images/photo.png" alt=""></div>
        <div class="photo"><img src="images/photo.png" alt=""></div>
        <div class="photo"><img src="images/photo.png" alt=""></div>
        <div class="photo"><img src="images/photo.png" alt=""></div>
        <div class="photo"><img src="images/photo.png" alt=""></div>
    </div>

    <!-- End Gallery -->

    <!-- Footer -->

    <div class="band"></div>
    <footer>
        <a href="index.php"><button class="button-passive">Главная</button></a>
        <a href="teachers.php"><button class="button-passive">Преподаватели</button></a>
        <a href="gallery.php"><button class="button">Галерея</button></a>
        <a href="reg.php"><button class="button-passive">Профиль</button></a>  
        <img class="social-icon" src="images/yt.svg" alt="">
        <img class="social-icon" src="images/vk.svg" alt="">
        <img class="social-icon" src="images/tt.svg" alt="">
        <img class="social-icon" src="images/tg.svg" alt="">
        <div class="break"></div>
        <div class="band"></div>
        <div class="break"></div>
        <img src="images/Logo.svg" alt="">
        <p>© 2023 Все права защищены</p>
        
    </footer>

    <!-- End Footer -->
</body>
</html>