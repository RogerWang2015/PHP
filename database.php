<?php
    $dsn = 'mysql:host=localhost;dbname=city_survey';
    $username = 'lizard2';
    $password = 'lizard';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>