<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <title>Melody Academy</title>
</head>
<body>

    <!-- Header -->

    <div class="social">
        <img class="social-icon" src="images/vk.svg" alt="">
        <img class="social-icon" src="images/yt.svg" alt="">
        <img class="social-icon" src="images/tt.svg" alt="">
        <img class="social-icon" src="images/tg.svg" alt="">
    </div>
    <div class="main">
        <header class="header">
            <a href="index.php"><button class="button">Главная</button></a>
            <a href="teachers.php"><button class="button-passive" style="margin-left: 120px;">Преподаватели</button></a>
            <a href="gallery.php"><button class="button-passive" style="margin-left: 220px;">Галерея</button></a>
            <a href="reg.php"><button class="button-passive" style="margin-left: 120px;">Профиль</button></a>
        </header>
        <div style="text-align: center;">
            <img class="main-logo"src="images/Logo.svg" alt="" class="header_logo">
        </div>
        <div style="text-align: center;">
            <button class="button" style="margin-top: 90px;">Бесплантый урок</button>
        </div>
    </div>

    <!-- End Header -->

    <!-- Pictures -->
    
    <div class="pictures">
        <div class="blur"></div>
        <div class="picture_1"></div>
        <div class="picture_2"></div>
        <div class="picture_4"></div>
        <div class="picture_5"></div>
        <div class="picture_3"></div>
        <div class="picture_6"></div>
        <div class="picture_7"></div>
    </div>

    <!--End Pictures-->

    <!-- Parallax -->

        <div class="parallax">
            <p>У нас вы сможете научиться игре на любом музыкальном инструменте, от классической гитары до синтезатора. Также мы предлагаем индивидуальные и групповые занятия, чтобы вы могли выбрать наиболее подходящий формат обучения. Присоединяйтесь к нашей музыкальной семье и раскройте свой потенциал вместе с нами.</p>
        </div>

    <!-- End Parallax -->

    <!-- Public Lesson -->

        <div class="public-lesson">
            <img src="images/public_lesson.png" alt="">
            <p> <strong>Открытый урок</strong> <br> <br>
                28 Июня 2023 <br> <br>
                Приходите к нам в гости, задавайте вопросы, пробуйте пару инструментов и наслаждайтесь отличной музыкой!</p>
        </div>

    <!-- End Public Lesson -->

    <!-- Directions -->

        
        <div class="directions">
            <div class="headline">
                <h2>Наши направления</h2>
                <div class="line"></div>
            </div>
            <div class="break"></div>
            <div class="slider">
                <div class="slider_item"><img src="images/mic.svg" alt=""><br>Вокал</div>
                <div class="slider_item"><img src="images/guitar.svg" alt=""><br>Струнные</div>
                <div class="slider_item"><img src="images/drum.svg" alt=""><br>Ударные</div>
                <div class="slider_item"><img src="images/piano.svg" alt=""><br>Клавишные</div>
                <div class="slider_item"><img src="images/wind.svg" alt=""><br>Духовые</div>
            </div>
        </div>

    <!-- End Directions -->

    <!-- Teachers -->
        <br>
        <div class="teachers">
            <div class="headline">
                <h2>Наши преподаватели</h2>
                <div class="line"></div>
            </div>
            <div class="break"></div>
            <div class="teacher">
                <img src="images/teachers/bennington.png" alt="">
                <p>Честер Беннингтон</p>
                <a href="teachers/bennington.php"><button class="button">Записаться</button></a>
            </div>
            <div class="teacher">
                <img src="images/teachers/Misko.png" alt="">
                <p>Александр Мисько</p>
                <a href="teachers/misko.php"><button class="button">Записаться</button></a>
            </div>
            <div class="teacher">
                <img src="images/teachers/Gercev.png" alt="">
                <p>Михаил Герцев</p>
                <a href="teachers/gercev.php"><button class="button">Записаться</button></a>
            </div>
        </div>

    <!-- End Teachers -->

    <!-- Footer -->

        <div class="band"></div>
        <footer>
            <a href="index.php"><button class="button">Главная</button></a>
            <a href="teachers.php"><button class="button-passive">Преподаватели</button></a>
            <a href="gallery.php"><button class="button-passive">Галерея</button></a>
            <a href="reg.php"><button class="button-passive">Профиль</button></a>
            <img class="social-icon" src="images/yt.svg" alt="">
            <img class="social-icon" src="images/vk.svg" alt="">
            <img class="social-icon" src="images/tg.svg" alt="">
            <img class="social-icon" src="images/tt.svg" alt="">
            <div class="break"></div>
            <div class="band"></div>
            <div class="break"></div>
            <img src="images/Logo.svg" alt="">
            <p>© 2023 Все права защищены</p>
            
        </footer>

    <!-- End Footer -->
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="scripts/slick.min.js"></script>
    <script src="scripts/script.js"></script>
    <script>$(document).ready(function(){
        $('.slider').slick({
          slidesToShow: 3,
          variableWidth:true,
        });
      });</script>

</body>
</html>