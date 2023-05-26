<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/auth.css">
    <title>Авторизация</title>
</head>
<body>

    <div class="reg">
        <div class="wrap">
            <div class="window window--form" role="dialog">
                <div class="styled">
                    <div class="loginblock__h1">Авторизация</div>
                    <form action="vendor/signin.php" method="POST">
                        <div class="formitem">
                            <input type="email" name="email" placeholder="Электронная почта" value="">
                        </div>
                        <div class="formitem">
                            <input type="password" name="password" placeholder="Пароль" value="">
                        </div>
                        <div class="loginblock__bottom flexi">
                            <a href="reg.php" class="loginblock__link">Нет аккаунта? <div class="ref"> Зарегистрироваться</div></a>
                        </div>
                        <input type="submit" value="Войти" id="submit" class="submit button">
                        <?php
                            if($_SESSION['message']) {
                                echo '<div class="msg"> ' . $_SESSION['message'] . '</div>';
                            }
                            unset($_SESSION['message']);
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>