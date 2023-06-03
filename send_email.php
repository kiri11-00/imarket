<?php

if(isset($_POST['forgot'])) {
    $to = "1903kirill04@mail.ru"; // электронный адрес получателя
    $subject = $_POST['subject']; // тема сообщения, полученная из формы
    $message = $_POST['message']; // сообщение, полученное из формы
    $from = $_POST['email']; // электронный адрес отправителя, полученный из формы
    $headers = 'From: kiri11-00@mail.ru' . "\r\n" .
    'Reply-To: 1903kirill04@mail.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if(mail($to,$subject,$message,$headers)) {
        echo "Сообщение успешно отправлено.";
    } else {  
        echo "Ошибка отправки сообщения.";
    }
}

?>