<?php

// Объявляем нужные константы
define('DB_HOST', 'localhost');
define('DB_USER', 'gasangaji');
define('DB_PASSWORD', 'Gg08112011');
define('DB_NAME', 'jumeira');

// Подключаемся к базе данных
function connectDB() {
    $errorMessage = 'Невозможно подключиться к серверу базы данных';
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$conn)
        throw new Exception($errorMessage);
    else {
        $query = $conn->query('set names utf8');
        if (!$query)
            throw new Exception($errorMessage);
        else
            return $conn;
    }
}