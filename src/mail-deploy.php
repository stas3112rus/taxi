<?php
include('data/mysql.php');

$DEFAULT = getDefaults();

$to = $DEFAULT['email_for_leads'];

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: Такси24 <admin@taxi24h.ru>\r\n";

$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$car = trim($_POST['car']);
$carselect = trim($_POST['carselect']);
$from = trim($_POST['from']);
$too = trim($_POST['too']);
$date = trim($_POST['date']);
$msg = trim($_POST['msg']);
$message = "<b>Имя:</b> $name <br> <b>Телефон:</b> $phone <br> <b>Email:</b> $email <br> <b>Авто:</b> $car <br> <b>Откуда:</b> $from <br> <b>Куда:</b> $too <br> <b>Дата:</b> $date <br> <b>Сообщение:</b> $msg";

$subject = "Заявка";
mail($to, $subject, $message, $headers);

$token = "1734502778:AAF3B_jFqdRSuBgQQzzxU7a7upUEo9kDy5w";
$chat_id = "-522682165";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Авто: ' => $car,
  'Откуда: ' => $from,
  'Куда: ' => $to,
  'Дата: ' => $date,
  'Сообщение: ' => $msg,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
