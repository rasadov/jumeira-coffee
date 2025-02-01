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






// Получение товаров
function getGoods($options, $conn) {

    $query = "SELECT * FROM `categories` ";

    $data = $conn->query($query);
    return $data->fetch_all(MYSQLI_ASSOC);
}



// Получение всех данных
function getData($options, $conn) {
    $result = array(
        'goods' => getGoods($options, $conn)
    );

    $needsData = $options['needs_data'];
    if (empty($needsData)) return $result;

    if (in_array('brands', $needsData)) {
        $result['brands'] = getBrands($options['category_id'], $conn);
    }
    if (in_array('prices', $needsData)) {
        $result['prices'] = getPrices($options['category_id'], $conn);
    }

    return $result;
}


try {
    // Подключаемся к базе данных
    $conn = connectDB();



    // Получаем товары
    $data = getData($options, $conn);

    // Возвращаем клиенту успешный ответ
    echo json_encode(array(
        'code' => 'success',
        'data' => $data
    ));
}
catch (Exception $e) {
    // Возвращаем клиенту ответ с ошибкой
    echo json_encode(array(
        'code' => 'error',
        'message' => $e->getMessage()
    ));
}
