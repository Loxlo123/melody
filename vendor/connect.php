<?php

    $connect = mysqli_connect('localhost', 'root', '', 'melody');

    if (!$connect) {
        die('Error connect to DataBase');
    }