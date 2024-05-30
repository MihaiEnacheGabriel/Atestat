<?php
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'test');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".ATESTAT, EMAIL, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>