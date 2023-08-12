<?php
$fio = $_POST['fio'];
$mail = $_POST['email'];
$tel = $_POST['tel'];
$text = $_POST['text'];

$fio = htmlspecialchars($fio);
$mail = htmlspecialchars($mail);
$tel = htmlspecialchars($tel);
$text = htmlspecialchars($text);

$fio = urldecode($fio);
$mail = urldecode($mail);
$tel = urldecode($tel);
$text = urldecode($text);

$fio = trim($fio);
$mail = trim($mail);
$tel = trim($tel);
$text = trim($text);

if (mail("tech@alfaleads.net", "Contact us", "\r\n ФИО: ".$fio."\r\n Email: ".$mail."\r\n  Телефон: ".$tel. "\r\n  Сообщение: ".$text.,"From: sanchez.bubnoff@yandex.ru \r\n"))
 {
    header ("Location: /");
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>