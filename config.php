<?php
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'melody');
    define('DATABASE', 'users');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>