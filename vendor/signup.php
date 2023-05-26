<?php

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];


    if ($password === $password_confirm) {
    
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `username`, `password`, `number`, `email`, `status`) VALUES (NULL, '$name', '$password', '$number', '$email', '0')");
        $_SESSION['message'] = 'Успешно';

        $_SESSION['login']=true;

        header('Location: ../profile.php');

    } else {

        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../reg.php');

    }

?>