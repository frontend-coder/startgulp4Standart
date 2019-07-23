<?php

$recepient = "frontendercode@gmail.com";
$sitename  = "Сайт https://frontend-coder.github.io/";
$subject   = "Заказ с сайта https://frontend-coder.github.io/";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$messagesite = trim($_POST["messagesite"]);



$message = "
Имя обратившегося: $name <br>
Почтовый ящик клиента: $email <br>
Текст сообщения: $messagesite";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $subject, $message, "Content-type: text/html; charset=\"utf-8\"\n From: $recepient");
?>