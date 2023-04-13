<?

function sendMail()
{
    global $DEFAULT;

    $text = getTextMail();
    $theme = getTheme();

    mail($DEFAULT['email_for_leads'], $theme, $text);
}

function getTextMail()
{
    $nl = chr(13) . chr(10);
    $date_poezdki = "Дата поездки: " . $_POST["date_poezdki"] . $nl;

    $poezdka_from = "Куда подаем авто: " . $_POST["poezdka_from"] . $nl;
    $poezdka_to = "Куда едем: " . $_POST["poezdka_to"] . $nl;

    $klass_avto = "Класс авто поездки: " . $_POST["klass_avto"] . $nl;
    $name = "Имя: " . $_POST["name"] . $nl;
    $tel_1 = "Телефон: " . $_POST["phones"] . $nl;
    $email = "Email: " . $_POST["email"] . $nl;
    $message = "Текст сообщения: " . $_POST["message"] . $nl;

    $date = "Дата: " . date("d. m. Y") . $nl;
    $time = "Время: " . date("H:i") . $nl;

    return $date . $time . $date_poezdki . $poezdka_from . $poezdka_to . $klass_avto . $name . $tel_1 . $email . $message;
}

function getTheme()
{
    global $DEFAULT;

    $poezdka_from_1 = $_POST["poezdka_from"];
    $poezdka_to_1 = $_POST["poezdka_to"];
    return "Заявка на такси " . $poezdka_from_1 . " - " . $poezdka_to_1 . " (" . $DEFAULT['domain']  . ")";
}
