<?php

require_once('phpmailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

if($_POST['formName'] == "Контакты") {
//Поля пришедшие из формы
    $name = $_POST['name'];
    $phone = $_POST['tel'];
    $email = $_POST['email'];
} else {
    $name = $_POST['name'];
    $phone = $_POST['tel'];
    $email = $_POST['email'];
}

//От
$mail->setFrom('tivproshlom@helios.na4u.ru');
$mail->addAddress('info@helios1c.ru');

//Тема
$mail->Subject = 'Заявка с тестового сайта';
//Текст
$mail->Body    = $name . ' оставил заявку, его телефон ' .$phone ;


if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: /');
}
?>