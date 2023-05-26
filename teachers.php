<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/teachers.css">
    <title>Teachers</title>
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
            <a href="teachers.php"><button class="button" style="margin-left: 120px;">Преподаватели</button></a>
            <a href="gallery.php"><button class="button-passive" style="margin-left: 220px;">Галерея</button></a>
            <a href="reg.php"><button class="button-passive" style="margin-left: 120px;">Профиль</button></a>
        </header>
        <div style="text-align: center;">
            <img class="main-logo" src="images/Logo.svg" alt="">
        </div>
    </div>

    <!-- End Header -->

    <!-- Teashers -->

    <div class="teachers">
        <div class="headline">
            <h2>Наши преподаватели</h2>
            <div class="line"></div>
        </div>
        <div class="break"></div>
        <div class="list">
            <button data-id="all" class="button-direction active">Все направления</button>
            <button data-id="vocal" class="button-direction">Вокал</button>
            <button data-id="guitar" class="button-direction">Струнные</button>
            <button data-id="drum" class="button-direction">Ударные</button>
            <button data-id="piano" class="button-direction">Клавишные</button>
            <button data-id="flute" class="button-direction">Духовые</button>
        </div>
        <div class="break"></div>
        <div class="block-cover">
            <div class="teacher vocal">
                <img src="images/teachers/bennington.png" alt="">
                <p>Честер Беннингтон</p>
                <a href="teachers/bennington.php"><button class="button">Записаться</button></a>
            </div>
            <div class="teacher vocal">
                <img src="images/teachers/Samohina.png" alt="">
                <p>Самохина Екатерина</p>
                <a href="teachers/"><button class="button">Записаться</button></a>
            </div>
            <div class="teacher vocal">
                <img src="images/teachers/Tarasova.png" alt="">
                <p>Тарасова Вера</p>
                <a href="teachers/"><button class="button">Записаться</button></a>
            </div>
            <div class="teacher guitar">
                <img src="images/teachers/Misko.png" alt="">
                <p>Александр Мисько</p>
                <a href="teachers/misko.php"><button class="button">Записаться</button></a>
            </div>
            <div class="teacher guitar">
                <img src="images/teachers/Gercev.png" alt="">
                <p>Михаил Герцев</p>
                <a href="teachers/gercev.php"><button class="button">Записаться</button></a>
            </div>
            <div class="teacher drum">
                <img src="images/teachers/Parfenov.png" alt="">
                <p>Парфенов Андрей</p>
                <a href="teachers/"><button class="button">Записаться</button></a>
            </div>
            <div class="teacher piano">
                <img src="images/teachers/Denis.png" alt="">
                <p>Крылов Андрей</p>
                <a href="teachers/"><button class="button">Записаться</button></a>
            </div>
            <div class="teacher piano">
                <img src="images/teachers/Kocheleva.png" alt="">
                <p>Кошелева Виктория</p>
                <a href="teachers/"><button class="button">Записаться</button></a>
            </div>
            <div class="teacher piano">
                <img src="images/teachers/lisecki.png" alt="">
                <p>Лисецкий Ян</p>
                <a href="teachers/"><button class="button">Записаться</button></a>
            </div>
            <div class="teacher flute">
                <img src="images/teachers/Danilova.png" alt="">
                <p>Данилова Кристина</p>
                <a href="teachers/"><button class="button">Записаться</button></a>
            </div>
        </div>
    </div>

    <!-- End Teachers -->

    <!-- Footer -->

    <div class="band"></div>
    <footer>
        <a href="index.php"><button class="button-passive">Главная</button></a>
        <a href="teachers.php"><button class="button">Преподаватели</button></a>
        <a href="gallery.php"><button class="button-passive">Галерея</button></a>
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

    <script src="scripts/script.js"></script>
</body>

</html>