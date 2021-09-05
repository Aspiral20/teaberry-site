<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    //Почта
    $discountmail = $_POST['discount'];

    $success = mail($discountmail, 'Запрос на скидку ', 'TEADISCOUNT');

    if ($success) {
        http_response_code(200);
        echo "Письмо отправлено";
    } else {
        http_response_code(500);
        echo "Письмо не отправлено";
    }

} else {
    http_response_code(403);
    echo "Данный метод запроса не поддерживается сервером";
}