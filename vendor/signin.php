<?php

    session_start();
    require_once 'connect.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "username" => $user['username'],
            "email" => $user['email']
        ];

        $_SESSION['login']=true;

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'Неверная почта или пароль';
        header('Location: ../auth.php');

    }
?>
