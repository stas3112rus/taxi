<?
include('../../../../src/data/mysql.php');
include('../../../../src/data/text-types/functions.php');
include('../../components/authorization/utils/functions.php');
include('../../../../src/data/cities/functions.php');
include('../../constants/routs.php');
include('../../components/alerts/drawAlert.php');
include('../../../../src/data/text-fields/functions.php');
include('../../../../src/data/text/functions.php');
include('../../components/text/utils/functions.php');
include('../../components/text/view/drawTextForm.php');

checkAuthorization();

$title = "Текстовое поле не найдено";

if (isTextTypes($_GET['text-type'])) {
    $text_type = getTextType($_GET['text-type']);
    $title = "Тексты - " . $text_type['text_type_name'];
}

if ($_POST)
    $alert .= updateTexts($_POST);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/main.min.css">

    <title><? echo $title ?></title>
</head>

<body>
    <section class="main">
        <div class="main__wrapper">
            <? include('../../components/sidebar/sidebar.php') ?>
            <div class="content">
                <? echo $alert ?>
                <?php
                if (isTextTypes($_GET['text-type'])) {
                ?>
                    <h1><? echo $title ?></h1>
                    <? drawTextForm($text_type['id_text_type']) ?>
                <? } else {
                    echo drawAlert("Нет данного типа страницы", "alert-danger");
                } ?>

            </div>
        </div>
    </section>
</body>

</html>